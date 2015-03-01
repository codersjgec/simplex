@extends('simplex')

@section('level')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1>{{$user->name}}</h1>
            <p>Email : {{$user->email}}</p>
            <p>Institution : {{$user->institution}}</p>
            <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle</a>
        </div>
    </div>
</div>
@stop
