<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use DB;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {

        return Validator::make($data, [
            'name' => 'required|string|max:255',

            'username' => 'required|string|email|max:255|unique:admin_users', /*email*/

            'phone' => 'required|numeric',

            'phoneSecondary' => 'numeric|nullable',

            'gender' => 'required|string',

            'country' => 'string|nullable',

            'region' => 'string|nullable',

            'city' => 'string|nullable',

            'address' => 'string|nullable',

            'password' => 'required|string|min:3|confirmed',

        ]);

    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {


        $user = User::create(
//            'name' => $data['name'],
//            'username' => $data['username'],
//            'phone' => $data['phone'],
//            'phoneSecondary' => $data['phoneSecondary'],
//            'gender' => $data['gender'],
//            'country' => $data['country'],
//            'region' => $data['region'],
//            'city' => $data['city'],
//            'address' => $data['address'],
        // 'password' => Hash::make($data['password'])

            ['name' => $data['name'],
                'username' => $data['username'],
                'phone' => $data['phone'],
                'phoneSecondary' => $data['phoneSecondary'],
                'gender' => $data['gender'],
                'country' => $data['country'],
                'region' => $data['region'],
                'city' => $data['city'],
                'address' => $data['address'],
                'password' => Hash::make($data['password'])

            ]);

        // var_dump($user);die;

        // $user = DB::table('admin_users')->insert(

        //     ['name' => $data['name'],
        //     'username' => $data['username'],
        //     'phone' => $data['phone'],
        //     'phoneSecondary' => $data['phoneSecondary'],
        //     'gender' => $data['gender'],
        //     'country' => $data['country'],
        //     'region' => $data['region'],
        //     'city' => $data['city'],
        //     'address' => $data['address'],
        //     'password' => Hash::make($data['password'])]

        // );

//         var_dump($user->id);die;

        $lastId = DB::getPdo()->lastInsertId();
//        var_dump($lastId);die;

        $slug = DB::table('admin_roles')->select('*')->where('slug', 'client')->first();
        DB::table('admin_role_users')->insert(['role_id'=>$slug->id,'user_id'=> $user->id]);
//        var_dump($user);die;
        return $user;
    }
}
