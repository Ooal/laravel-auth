@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Employees</div>

                <div class="card-body">
                  <h1><a href="{{route('index')}}">Employees</a></h1>
                  <div class="login-box">
                    <h1>EDIT EMPLOYEE</h1>
                    <form action="{{route('update',$emp -> id)}}" method="post">
                      @csrf
                      @method('POST')

                      <div class="user-box">
                        <input type="text" name="firstname" value="{{$emp -> firstname}}">
                      </div>
                      <div class="user-box">
                        <input type="text" name="lastname" value="{{$emp -> lastname}}">
                      </div>
                      <div class="user-box">
                        <input type="date" name="date_of_birth" value="{{$emp -> date_of_birth}}">
                      </div>
                      <div class="user-box">
                        <input type="text" name="private_code" value="{{$emp -> private_code}}">
                      </div>
                      <div class="user-box">
                        <select name="location_id">
                          @foreach ($locs as $loc)
                            <option value="{{$loc -> id}}"
                                @if ($loc -> id == $emp -> location -> id )
                                  selected
                                @endif
                              >{{$loc -> name}}</option>
                          @endforeach
                        </select>
                      </div>
                      <button class="btn btn-outline-primary" type="submit">Edit</button>
                    </form>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
