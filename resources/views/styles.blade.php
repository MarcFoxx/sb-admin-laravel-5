@extends('layouts.dashboard')
@section('page_heading','Links To Styles')
@section('section')
<ul>
	<li><a href="{{ url ('forms') }}">Forms</a></li>
	<li><a href="{{ url ('buttons') }}">Buttons</a></li>
	<li><a href="{{ url ('grid') }}">Grid</a></li>
	<li><a href="{{ url ('icons') }}">Icons</a></li>
	<li><a href="{{ url ('charts') }}">Charts</a></li>
	<li><a href="{{ url ('tables') }}">Table</a></li>
	
<ul>
           
            
@stop
