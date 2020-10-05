@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><a href="{{route('index')}}">Employee</a></div>
                <div class="card-body">
                  <p>New Employee</p>
                  <div class="login-box">
                    <form action="{{route('store')}}" method="post">
                      @csrf
                      @method('POST')

                      <div class="user-box">
                        <input type="text" name="firstname" value="">
                        <label for="firstname">firstname</label>
                      </div>
                      <div class="user-box">
                        <input type="text" name="lastname" value="">
                        <label for="lastname">lastname</label>
                      </div>
                      <div class="user-box">
                        <input type="date" name="date_of_birth" value="">
                      </div>
                      <div class="user-box">
                        <input type="text" name="private_code" value="">
                        <label for="private_code">private_code</label>
                      </div>
                      <div class="user-box">
                        <select name="location_id">
                          @foreach ($locs as $loc)
                            <option value="{{$loc -> id}}">{{$loc -> name}}</option>
                          @endforeach
                        </select>
                        <label for="location_id">Location</label>
                      </div>
                      <button class="btn btn-outline-primary" type="submit">Create</button>
                    </form>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
