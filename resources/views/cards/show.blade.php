@extends('layout.layout')

@section('content')
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <h1>{{ $card->title }}</h1>

        <ul class="list-group">
            @foreach ($card->notes as $note)
            <li class="list-group-item">
                <div class="row">
                    <div class="col-md-6">{{ $note->body }}</div>
                    <div class="col-md-3 text-right">by <a href="/users/{{ $note->user->id }}" target="_blank">{{ $note->user->name }}</a></div>
                    <div class="col-md-3 text-right">
                        <a class="right" href='/notes/{{ $note->id }}/edit' target="_blank">
                            <button type="button" class="btn btn-default" aria-label="Edit notes"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> EDIT</button>
                        </a>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
        
        <hr>
        
        <h3>Add a New Note</h3>
        
        <form method="POST" action="/cards/{{ $card->id }}/notes">
            <div class="form-group">
                <textarea name="body" class="form-control"></textarea>
            </div>
            {{ csrf_field() }}
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Add Note</button>
            </div>
        </form>
        
    </div>
</div>
@stop