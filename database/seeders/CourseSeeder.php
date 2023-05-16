<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_course')->delete();

        DB::table('tbl_course')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'course_name' => "English",
                    'dept' => "English",
                ),
            1 =>
                array(
                    'id' => 2,
                    'course_name' => "Mathematics",
                    'dept' => "Maths",
                ), 
            2 =>
                array(
                    'id' => 3,
                    'course_name' => "Science",
                    'dept' => "Science",
                ),
            3 =>
                array(
                    'id' => 4,
                    'course_name' => "Economics",
                    'dept' => "Science",
                ),
        ));


    }
}

