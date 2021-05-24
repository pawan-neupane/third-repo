<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['title', 'body'];
    public function user(){
        return $this->belongsTo(User::class);
    }
    /*$question = Question::find(1);
    $question->user->email
    use HasFactory;*/
}
