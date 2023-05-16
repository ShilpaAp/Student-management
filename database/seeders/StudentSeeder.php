<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_student')->delete();

        DB::table('tbl_student')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'name' => "Anju",
                    'fk_parent_id' => 1,
                    'gender' => "F",
                ),
            1 =>
                array(
                    'id' => 2,
                    'name' => "Alex",
                    'fk_parent_id' => 2,
                    'gender' => "M",
                ), 
            2 =>
                array(
                    'id' => 3,
                    'name' => "Rols",
                    'fk_parent_id' => 2,
                    'gender' => "M",
                ),
            3 =>
                array(
                    'id' => 4,
                    'name' => "David",
                    'fk_parent_id' => 3,
                    'gender' => "M",
                ),
            4 =>
                array(
                    'id' => 5,
                    'name' => "Abi",
                    'fk_parent_id' => 4,
                    'gender' => "M",
                ),
            5 =>
                array(
                    'id' => 6,
                    'name' => "Jinu",
                    'fk_parent_id' => 5,
                    'gender' => "F",
                ),
            6 =>
                array(
                    'id' => 7,
                    'name' => "Aju",
                    'fk_parent_id' => 5,
                    'gender' => "F",
                ),
        ));


    }
}

