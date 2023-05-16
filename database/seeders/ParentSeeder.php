<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ParentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_parent')->delete();

        DB::table('tbl_parent')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'name' => "John",
                    'email' => "John@gmail.com",
                ),
            1 =>
                array(
                    'id' => 2,
                    'name' => "Tom",
                    'email' => "Tom2@gmail.com",
                ), 
            2 =>
                array(
                    'id' => 3,
                    'name' => "Joy",
                    'email' => "bin@jon.com",
                ),
            3 =>
                array(
                    'id' => 4,
                    'name' => "Adam",
                    'email' => "Adam@yahoo.com",
                ),
            4 =>
                array(
                    'id' => 5,
                    'name' => "Dennis",
                    'email' => "Den@gmail.com",
                ),
        ));


    }
}

