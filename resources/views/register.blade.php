@extends('layout')

@section('body')
<div class="container">
	<div class="content">
		<div class="title">Register</div>
		@if ($alert = Session::get('flash_message'))
		    <div class="alert alert-warning">
		        {{ $alert }}
		    </div>
		@endif
		{!! Form::open(['route'=>'usersignup']) !!}
			<div class="form-group">
				{!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Your Full Name']) !!}
			</div>
			<div class="form-group">
				{!! Form::text('email',null,['class'=>'form-control','placeholder'=>'Your email id']) !!}
			</div>
			<div class="form-group">
				{!! Form::text('institution',null,['class'=>'form-control','placeholder'=>'Institution you belong to']) !!}
			</div>
			<div class="form-group">
				{!! Form::submit('Register',['class'=>'btn btn-primary form-control']) !!}
			</div>
		{!! Form::close() !!}
		
		<div>
			Already Registered? <a href="{{route('login')}}"><span class="btn btn-info">Login</span></a><br /><br />
		</div>
	</div>
</div>
@stop