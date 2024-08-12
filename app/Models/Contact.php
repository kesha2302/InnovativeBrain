<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    // protected $fillable = [
    //     'name',
    //     'email',
    //     'contact',
    //     'resume',
    //     'message',
    // ];

    protected $table= "internship";
    protected $primaryKey = "intern_id";
}

