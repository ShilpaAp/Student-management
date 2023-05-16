<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index()
    {
        $datas = DB::table('tbl_student')
        ->select('tbl_student.name as student_name', 'tbl_course.course_name', 'tbl_parent.name','tbl_student_opted_course.is_active','tbl_student_opted_course.id')
        ->leftJoin('tbl_student_opted_course', 'tbl_student.id', '=', 'tbl_student_opted_course.student_id')
        ->leftJoin('tbl_course', 'tbl_student_opted_course.course_id', '=', 'tbl_course.id')
        ->leftJoin('tbl_parent', 'tbl_student.fk_parent_id', '=', 'tbl_parent.id')
        ->orderBy('tbl_student.id')
        ->get();
    
        return view('table', ['datas' => $datas]);
    }

    // Update is_active column
    public function toggleStudentActive(Request $request)
    {
        $StatusChange = $request['is_active'];
        $studentId = $request['student_id'];

        DB::table('tbl_student_opted_course')
            ->where('id', $studentId)
            ->update(['is_active' => $StatusChange]);

        return response()->json(['success' => true]);
    }

}
?>