<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'contact',
        'interested_in',
    ];

    protected $table= "inquiry";
    protected $primaryKey = "inquiry_id";
}
