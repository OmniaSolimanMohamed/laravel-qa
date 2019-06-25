<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //
    protected $fillable =['title', 'body'];
    public function user()
    {
        return $this->belongsTo(user::class);
    }
    /* TO GET INFO ABOUT USER
    $question = Question::find(1);
    $question->user->email*/

