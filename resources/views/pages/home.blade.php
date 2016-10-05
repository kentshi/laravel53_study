@extends('layout.layout')
@section('header')
<style>
    h1{
        color: #f00;
    }
</style>
@stop
@section('content')
<h1>Page here .</h1>
@stop

@section('footer')
<script src="{{ elixir('js/app.js') }}"></script>
@stop