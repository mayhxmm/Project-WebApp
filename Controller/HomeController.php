<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //return view('home');
        $students = Students::all();
        return view('students.index', compact('students'));
    }
}
