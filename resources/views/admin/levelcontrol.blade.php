@extends('admin.layout')

@section('content')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Level Control
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="{{route('admin')}}">Dashboard</a>
            </li>
            <li class="active">
                <i class="fa fa-edit"></i> Level Control
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-6">
        <h2>Total Levels Created : {{$level_last}}</h2>
    </div>
    <div class="col-lg-6">
        <h1>Add Level {{$level_last + 1}}</h1>
        {!! Form::open(['route'=>'levelcreate','enctype'=>'multipart/form-data']) !!}
            <div class="form-group">
                {!! Form::text('title',null,['class'=>'form-control','placeholder'=>'Title Clue']) !!}
            </div>
            <div class="form-group">
                {!! Form::textarea('body',null,['class'=>'form-control','placeholder'=>'Source Code Clue']) !!}
            </div>
            <div class="form-group">
                {!! Form::file('picture',['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Create Level',['class'=>'btn btn-primary form-control']) !!}
            </div>
        {!! Form::close() !!}
    </div>
</div>
<!-- /.row -->
@stop