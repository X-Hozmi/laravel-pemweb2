<?php

namespace App\Http\Controllers\Latihan\Student;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class StudentViewController extends Controller
{
    public function selectTampil()
    {
        $result = DB::select('SELECT * FROM students');
        echo $result[0]->id.'<br>';
        echo $result[0]->npm.'<br>';
        echo $result[0]->name.'<br>';
        echo $result[0]->birth_date.'<br>';
        echo $result[0]->gpa;
    }

    public function selectView()
    {
        $result = DB::select('SELECT * FROM students');

        return view('students.show', ['students' => $result]);
    }

    public function selectWhere()
    {
        $result = DB::select(
            'SELECT * FROM students WHERE gpa > ? ORDER BY name ASC ',
            [3]
        );

        return view('students.show', ['students' => $result]);
    }
}
