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
        DB::table('users')->delete();
        DB::table('users')->insert([
            'name' => 'Danutz',
            'email' => 'danutzcodrescu@gmail.com',
            'password' => bcrypt('test'),
        ]);
    }
}
