@extends('admin.layouts.dashboard')
@section('page_title',' - Destaques')

@section('section') 

<div class='container'>

	{{ Form::open() }}
	{{ Form::file('image')}}
	{{ Form::submit('salvar') }}
	{{Form::close() }}

</div>

@stop