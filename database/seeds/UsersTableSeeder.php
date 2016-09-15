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
        DB::table('users')->insert([
            ['username' => 'superadmin','password' => bcrypt('123123'),'level' => 1,'created_at' => new DateTime(),],
        	['username' => 'superadmin1','password' => bcrypt('123123'),'level' => 1,'created_at' => new DateTime(),],
        	['username' => 'superadmin2','password' => bcrypt('123123'),'level' => 1,'created_at' => new DateTime(),],
        	['username' => 'superadmin3','password' => bcrypt('123123'),'level' => 1,'created_at' => new DateTime(),],
        	['username' => 'superadmin4','password' => bcrypt('123123'),'level' => 1,'created_at' => new DateTime(),],
        	['username' => 'superadmin5','password' => bcrypt('123123'),'level' => 1,'created_at' => new DateTime(),],
        	['username' => 'superadmin6','password' => bcrypt('123123'),'level' => 1,'created_at' => new DateTime(),]
        	// ['username' => str_random(10),'password' => bcrypt('123123'),'level' => 1]
        ]);
    }
}
