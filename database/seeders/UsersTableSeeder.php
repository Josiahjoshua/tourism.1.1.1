<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use TCG\Voyager\Models\Role;
use TCG\Voyager\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (User::count() == 0) {

            User::create([
                'name'           => 'Admin',
                'email'          => 'tirdoadmin@gmail.com',
                'password'       => bcrypt('Admin@#tirdo2023'),
                'remember_token' => Str::random(60),
            ]);
        }
    }
}
