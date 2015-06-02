<?php namespace Pingpong\Admin\Seeders;

use Illuminate\Database\Seeder;
use Pingpong\Admin\Entities\User;

class UsersTableSeeder extends Seeder
{

    public function run()
    {
        $user = User::create([
            'email' => 'admin@example.com',
            'password' => 'admin',
        ]);

        $user->addRole(1);
    }
}
