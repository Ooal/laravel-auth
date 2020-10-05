<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Location;
use Illuminate\Http\Request;

class LoggedController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  public function destroy($id) {
    $emp = Employee :: findorfail($id);
    $emp -> delete();
    return redirect() -> route('index');
  }
  public function create() {
    $locs = Location::all();
    return view('create',compact('locs'));
  }
  public function edit($id) {
    $emp = Employee :: findorfail($id);
    $locs = Location::all();
    return view('edit',compact('emp','locs'));
  }
  public function store(Request $request) {
    $data = $request -> all();
    Employee :: create($data);
    return redirect() -> route('index');
  }
  public function update(Request $request ,$id ) {
  $data = $request -> all();
  $post = Employee::findOrFail($id);
  $post -> update($data);
  return redirect() -> route('index');
}
}
