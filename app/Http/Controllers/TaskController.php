<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
  public function show($id) {
    $tas = Task :: findorfail($id);
    return view('tas', compact('tas'));
  }
}
