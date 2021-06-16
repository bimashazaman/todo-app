<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;


class TodoController extends Controller
{
    public function index()
    {
        return view('todoList');

    }


    public function saveTask()
    {


        Todo::create([
            'name' => request('name'),
            'task' => request('task'),
        ]);
        return redirect()->back();
    }
}
