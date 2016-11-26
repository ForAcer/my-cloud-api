<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * 填充用户表数据.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('123456'),
        ]);
    }
}