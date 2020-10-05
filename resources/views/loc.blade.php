@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Location : " {{$loc -> name}} -  {{$loc -> street}} - {{$loc -> city}} ({{$loc -> state}})  "</div>

                <div class="card-body">
                  <h3>Employees list :</h3>
                  <ul>
                    @foreach ($loc -> employees as $emp)
                      <li><a href="{{route('show_epm', $emp -> id)}}">{{$emp -> firstname}} {{$emp -> lastname}} </a></li>
                    @endforeach
                  </ul>
                  <h2><a class="btn btn-outline-primary" href="{{route('index')}}">Employees</a></h2>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
