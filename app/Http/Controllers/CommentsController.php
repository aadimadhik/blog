<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentsController extends Controller
{
    public function index()
	{
		return view('comments.index');
	}

	public function create()
	{
		return view('comments.create');
	}

	public function edit()
	{
		return view('comments.edit');
	}

	public function store(Request $request)
	{
		$comments = new Comment;
		$comments->title = $request->title;
		$comments->description = $request->description;
		$comments->save();
	}
}
