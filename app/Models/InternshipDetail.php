<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InternshipDetail extends Model
{
    use HasFactory;

    protected $table ='internship';
    protected $primaryKey = 'intern_id';
}
