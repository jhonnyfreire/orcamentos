<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$user1 = new
        \App\User::create(['name' => 'admin', 'email' => 'admin@admin.com.br', 'password' => bcrypt('123456')]);
        // $user->name = 'admin';
        // $user->email = 'admin@admin.com.br';
        // $user->password = bcrypt('123456');
        // $user->save();
    }
}
