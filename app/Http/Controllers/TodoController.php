<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $posts = Todo::latest()->get();
        return view('todos.index', compact('todos'));
    }
}
