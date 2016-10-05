@extends('layout/layout')

@section('content')
    <h1>All Card</h1>
    
    @foreach ($cards as $card)
    <div>
        <a href="{{ $card->path() }}">{{ $card->title }}</a>
    </div>
    @endforeach

@stop