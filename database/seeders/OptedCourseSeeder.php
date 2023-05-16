<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OptedCourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_student_opted_course')->delete();

        DB::table('tbl_student_opted_course')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'student_id' => 1,
                    'course_id' => 1,
                    'is_active' => 0,
                ),
            1 =>
                array(
                    'id' => 2,
                    'student_id' => 1,
                    'course_id' => 4,
                    'is_active' => 0,
                ), 
            2 =>
                array(
                    'id' => 3,
                    'student_id' => 2,
                    'course_id' => 1,
                    'is_active' => 0,
                ),
            3 =>
                array(
                    'id' => 4,
                    'student_id' => 3,
                    'course_id' => 2,
                    'is_active' => 0,
                ),
            4 =>
                array(
                    'id' => 5,
                    'student_id' => 3,
                    'course_id' => 4,
                    'is_active' => 0,
                ),
            5 =>
                array(
                    'id' => 6,
                    'student_id' => 4,
                    'course_id' => 2,
                    'is_active' => 0,
                ),
            6 =>
                array(
                    'id' => 7,
                    'student_id' => 4,
                    'course_id' => 1,
                    'is_active' => 0,
                ),
            7 =>
                array(
                    'id' => 8,
                    'student_id' => 4,
                    'course_id' => 3,
                    'is_active' => 0,
                ),
            8 =>
                array(
                    'id' => 9,
                    'student_id' => 5,
                    'course_id' => 3,
                    'is_active' => 0,
                ),
            9 =>
                array(
                    'id' => 10,
                    'student_id' => 6,
                    'course_id' => 2,
                    'is_active' => 0,
                ),
            10 =>
                array(
                    'id' => 11,
                    'student_id' => 7,
                    'course_id' => 1,
                    'is_active' => 0,
                ),
        ));


    }
}

