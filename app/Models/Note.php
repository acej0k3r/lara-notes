<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    //protected takes an array of columns that you want to be able to mass assign to the database
    protected $fillable = ['note', 'user_id'];
}
