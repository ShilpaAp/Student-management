<?php

namespace Database\Seeders;

use Database\Seeders\CourseSeeder;
use Database\Seeders\OptedCourseSeeder;
use Database\Seeders\ParentSeeder;
use Database\Seeders\StudentSeeder;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CourseSeeder::class);
        $this->call(OptedCourseSeeder::class);
        $this->call(ParentSeeder::class);    
        $this->call(StudentSeeder::class);    
    }
}
