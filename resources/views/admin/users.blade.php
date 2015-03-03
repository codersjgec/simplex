@extends('admin.layout')

@section('content')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Users
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="{{route('admin')}}">Dashboard</a>
            </li>
            <li class="active">
                <i class="fa fa-edit"></i> Users
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-3">
        <h2>Total Users : {{$user_count}}</h2>
    </div>
    <div class="col-lg-9">
        Users table here
    </div>
</div>
<!-- /.row -->
@stop