<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Md Ashikul Islam',
            'email'=>'admins@gmail.com',
            'password'=>\Hash::make('12345678')
        ]);
    }
}
