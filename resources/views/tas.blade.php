@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Task : {{$tas -> name}}</div>

                <div class="card-body">
                  <ul>
                    @foreach ($tas -> employees as $emp)
                      <li>{{$emp -> firstname}} {{$emp -> lastname}} : {{$emp -> location -> name}}
                       </li>
                    @endforeach
                  </ul>
                  <h2><a class="btn btn-outline-primary" href="{{route('index')}}">Employees</a></h2>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
