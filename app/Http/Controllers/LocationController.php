<?php

namespace App\Http\Controllers;

use App\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
  public function show($id) {
    $loc = Location :: findorfail($id);
    return view('loc', compact('loc'));
  }
}
