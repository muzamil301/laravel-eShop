<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){

    DB::table('admin_users')->insert([
			'username' => 'admin2',
			'password' => '$2y$10$AEu0Wz/Sd93d53W5MMYaQOxjkUCB9vr1SaxydGLpreHv1r1gpgn72',
			'name' => 'admin',
			'firstName' => 'muzamil',
			'gender' => 'male',
			'city' => 'lahore',
			'address' => 'dummy address',
			'isVerified' => 0,
			'status' => 1
        ]);
	}

    /*{
        INSERT INTO admin_users(username, password,name,avatar,remember_token,created_at,updated_at,firstName,lastName, gender, phone,phoneSecondary,country,region,city,address,paymentType,isVerified, status) VALUES('muzamil301@gmail.com', '$2y$10$AEu0Wz/Sd93d53W5MMYaQOxjkUCB9vr1SaxydGLpreHv1r1gpgn72', 'admin', NULL, NULL, NULL, NULL,'Muzamil', NULL, 'male', NULL, NULL, NULL, NULL, 'lahore','dummy asddress', NULL,0, 1)
    }*/
}


