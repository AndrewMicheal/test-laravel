<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\teacher;

class TeacherController extends Controller
{
    //
    public function index()
    {
        $teachers = teacher::get();
        $x = [
            '111',
            '555',
            '555',
            '555'
        ];
        return view('teachers/all_teacher',[
            'teachers' => $teachers , 
            'ali' => $x
        ]);
    }
}
