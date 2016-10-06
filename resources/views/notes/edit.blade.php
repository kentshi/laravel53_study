@extends('layout.layout');

@section('content')
<h1>EDIT</h1>

<form method="POST" action="/notes/{{ $note->id }}">
    {{ method_field('PATCH') }}
    <div class="form-group">
        <textarea name="body" class="form-control">{{ $note->body }}</textarea>
    </div>
    {{ csrf_field() }}
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Update Note</button>
    </div>
</form>
@stop