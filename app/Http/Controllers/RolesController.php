<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;

class RolesController extends Controller
{
    public function index()
	{
		return view('roles.index');
	}

	public function create()
	{
		return view('roles.create');
	}

	public function edit()
	{
		return view('roles.edit');
	}

	public function store(Request $request)
	{
		$roles = new Role;
		$roles->name = $request->name;
		$roles->description = $request->role;
		$roles->save();
	}
}
