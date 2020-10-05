<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index() {
      $emps = Employee :: all();
      return view('emps', compact('emps'));
    }
    public function show($id) {
      $emp = Employee :: findorfail($id);
      return view('emp', compact('emp'));
    }
  }
