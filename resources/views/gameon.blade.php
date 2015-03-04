@extends('simplex')

@section('level')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <p>
            	<img src="{{$levels->picture}}" height="500px" width="auto">
            </p>
<!--
***********************************

{{$levels->body}}

***********************************
-->
        </div>
    </div>
</div>
@stop