@extends('layout')

@section('body')
<div class="container">
	<div class="content">
		<div class="title">Let the Games Begin</div>
		@if ($alert = Session::get('flash_message'))
		    <div class="alert alert-warning">
		        {{ $alert }}
		    </div>
		@endif
		{!! Form::open(['route'=>'gameon']) !!}
			<div class="form-group">
				{!! Form::text('username',null,['class'=>'form-control','placeholder'=>'Your registered email id as username']) !!}
			</div>
			<div class="form-group">
				{!! Form::password('password',['class'=>'form-control','placeholder'=>'Your Password']) !!}
			</div>
			<div class="form-group">
				{!! Form::submit('Begin Game',['class'=>'btn btn-info form-control']) !!}
			</div>
		{!! Form::close() !!}
		<div>
			<a href="{{route('forgotpassword')}}"><span class="btn btn-default">Forgot Password</span></a><br /><br />
			Not Registered yet? <a href="{{route('register')}}"><span class="btn btn-warning">Register</span></a>
			
		</div>
	</div>
</div>
@stop