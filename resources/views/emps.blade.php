@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Employees</div>

                <div class="card-body">
                  <ul>
                    @foreach ($emps as $emp)
                    <li>
                        <a href="{{route('show_epm', $emp -> id)}}">{{$emp -> firstname}} {{$emp -> lastname}} </a>
                    </li>
                    @endforeach
                    </ul>
                    @auth 
                      <h2><a class="btn btn-outline-primary" href="{{route('create')}}">NEW EMPLOYEE</a></h2>
                    @endauth

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
