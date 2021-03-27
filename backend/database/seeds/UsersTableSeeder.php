<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('users')
            ->insert(array('name' => 'admin', 'email' => 'admin@admin.com', 'password' => app('hash')->make('admin'), 'is_super_admin' => 1));
    }
}
