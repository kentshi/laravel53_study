<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    //
    protected $fillable = ['body', 'user_id'];
    
    public function card()
    {
        return $this->belongsTo(Card::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
