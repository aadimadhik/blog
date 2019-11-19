<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class EmployeesController extends Controller
{
	public function index()
	{
		return view('employees.index');
	}

	public function create()
	{
		return view('employees.create');
	}

	public function edit()
	{
		return view('employees.edit');
	}

	public function store(Request $request)
	{
		$employees = new Employee;
		$employees->name = $request->name;
		$employees->title = $request->title;
		$employees->address = $request->address;
		$employees->phoneno = $request->phone;
		$employees->salary = $request->salary;
		$employees->save();
	}
}