@extends('layout')

@section('body')
<div class="container">
	<div class="content">
		<div class="title">Elementary 2016</div>
		<div class="quote">{{ Inspiring::quote() }}</div>
		<div><a href="{{route('login')}}"><span class="btn btn-default">Game On</span></a>
		</div>
	</div>
</div>
@stop