<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display the student dashboard.
     */
    public function index()
    {
        $user = auth()->user();
        return view('student.dashboard', compact('user'));
    }
}
