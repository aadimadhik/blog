<?php 

namespace App\Http\Controllers;

class StudentsController extends Controller
{
	public function create()
	{
		return view('students.create');
	}

	public function table()
	{
		return view('students.index');
	}

	public function home()
	{
		return view('students.home');
	}
}	
	
