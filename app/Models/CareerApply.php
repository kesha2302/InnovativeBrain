<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CareerApply extends Model
{
    use HasFactory;

    protected $tabel = 'career_apply';
    protected $primaryKey = 'careerapply_id';
}
