<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Illuminate\Support\Facades\Hash;
use DB;

class MyAccountController extends BaseController
{

    public function index()
    {
        if (Auth::user()) {

            $userId = Auth::user()->id;

            $userData = DB::table('admin_users')
                ->where('admin_users.id', $userId)
                ->first();
            return view('my-account')->with('userData', $userData);

        } else {
            return Redirect('/');
        }
    }

    public function updateUser()
    {
        if ($_POST) {

            $validator = $this->validator($_POST);
            if ($validator->fails()) {

                return redirect()->back()->withErrors(['Error', ' Please fill the required fields']);

            } //            var_dump('second');die;
            else {

                $name = $_POST['name'];
                $gender = $_POST['gender'];
                $phone = $_POST['phone'];
                $phoneSecondary = $_POST['phoneSecondary'];
                $region = $_POST['region'];
                $city = $_POST['city'];
                $country = $_POST['country'];
                $address = $_POST['address'];
                $password = $_POST['password'];


                $EncPassword = Hash::make($password);

                $userId = Auth::user()->id;
                $updateFields = [
                    'name' => $name,
                    'gender' => $gender,
                    'phone' => $phone,
                    'phoneSecondary' => $phoneSecondary,
                    'country' => $country,
                    'region' => $region,
                    'city' => $city,
//                    'password' => $EncPassword,
                    'address' => $address
                ];
                if (!empty($password)){
                    $updateFields['password'] = $EncPassword;
                }
                DB::table('admin_users')
                    ->where('id', $userId)
                    ->update($updateFields);
                return redirect()->back()->with('message', "Account information successfully updated");
            }




        }
    }

    protected function validator(array $data)
    {
//        var_dump('first');

        return Validator::make($data, [
            'name' => 'required',
            'gender' => 'required',
            'phone' => 'required'
        ]);

    }

}
