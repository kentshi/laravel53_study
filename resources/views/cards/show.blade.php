@extends('layout.layout')

@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h1>{{ $card->title }}</h1>

        <ul class="list-group">
            @foreach ($card->notes as $note)
            <li class="list-group-item">
                <div class="row">
                    <div class="col-md-6">{{ $note->body }}</div>
                    <div class="col-md-2 text-right">by <a href="/users/{{ $note->user->id }}" target="_blank">{{ $note->user->name }}</a></div>
                    <div class="col-md-2 text-right">
                        <a class="right" href='/notes/{{ $note->id }}/edit'>
                            <button type="button" class="btn btn-default" aria-label="Edit notes"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> EDIT</button>
                        </a>
                    </div>
                    <div class="col-md-2 text-right">
                        <button type="button" note_id="{{ $note->id }}" class="btn btn-default delete_note" aria-label="Edit notes"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> DELETE</button>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
        
        <hr>
        
        <h3>Add a New Note</h3>
        
        <form method="POST" name="new_notes" action="/cards/{{ $card->id }}/notes">
            <div class="form-group">
                <textarea name="body" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <select name="user_id">
                    <option value="0">Please choose the USER</option>
                    @foreach ($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>
            {{ csrf_field() }}
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Add Note</button>
            </div>
        </form>
        
    </div>
</div>
@stop

@section('footer')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $(document).on('submit', 'form[name="new_notes"]', function(e){
            var user_id = $(this).find('select[name="user_id"]');
            if($(user_id).val() === '0'){
                e.preventDefault();
                alert('You must select a USER');
            }else{
                var note_body = $(this).find('textarea[name="body"]');
                if($(note_body).val() === ''){
                    e.preventDefault();
                    alert('Note body can\t be empty');
                }
            }
        });
        
        $(document).on('click', '.delete_note', function(){
            var notes_id = $(this).attr('note_id');
            var user_token = $('input[name="_token"]').val();
            var data = {_token : user_token}
            $.ajax({
                url: '/notes/' + notes_id,
                data: data,
                method: 'delete',
                datatype: 'json',
                
            }).always(function(){
                location.reload();
            })
        });
    });
</script>
@stop