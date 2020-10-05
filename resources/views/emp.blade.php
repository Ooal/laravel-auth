@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Employee</div>

                <div class="card-body">
                  <h3>Employee</h3>
                  <p>{{$emp -> firstname}} {{$emp -> lastname}}</p>
                  <p>Date of birth : {{$emp -> date_of_birth}}</p>
                  <p>Private code : {{$emp -> private_code}}</p>
                  <h3>Location :</h3>
                  <p>{{$emp -> location -> name}} ({{$emp -> location -> city}} - {{$emp -> location -> state}})</p>
                  <h3>Tasks :</h3>
                    @foreach ($emp -> tasks as $tas)
                      <p><a href="{{route('show_tas', $tas -> id)}}">{{$tas -> name}}</a> : {{$tas -> start_date}} - {{$tas -> end_date}}</p>
                    @endforeach
                  <a class="btn btn-outline-danger" href="{{route('delete', $emp -> id)}}">Delete</a>
                  <a class="btn btn-outline-primary" href="{{route('edit', $emp -> id)}}">Edit</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
