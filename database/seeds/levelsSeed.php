<?php

use Illuminate\Database\Seeder;

class levelsSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	$level = new \App\Models\User_level();
    	$level->name = 'Ownwer';
    	$level->save();

    	$level = new \App\Models\User_level();
    	$level->name = 'Customer';
    	$level->save();
    }
}
