<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use App\Traits\Teacher\ManageCourses;

class TeacherController extends Controller
{
    use ManageCourses;
    public function index(){
        return view('teacher.index');
    }

}
