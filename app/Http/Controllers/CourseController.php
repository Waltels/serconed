<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;


class CourseController extends Controller
{
    public function index() {
        $courses = Course::filtered();
        return view('learning.courses.index', compact('courses'));
    }

    public function search() {
        session()->remove('search[courses]');
        if (request('search')) {
            session()->put('search[courses]', request('search'));
            session()->save();
        }
        return redirect(route('courses.index'));
    }
}
