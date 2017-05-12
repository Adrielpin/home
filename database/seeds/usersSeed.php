<?php

use Illuminate\Database\Seeder;

class usersSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	$user = new \App\Models\User();
    	$user->name = 'Admin';
    	$user->email = 'adriel@belladasemana.com.br';
    	$user->password = Hash::make('123456');
        $user->birth = date("1991-07-03");
    	$user->level = 1;
    	$user->save();

    	$user = new \App\Models\User();
    	$user->name = 'Customer';
    	$user->email = 'adrielpin@gmail.com';
    	$user->password = Hash::make('123456');
        $user->birth = date("1991-07-03");
    	$user->level = 2;
    	$user->save();
    }
}
