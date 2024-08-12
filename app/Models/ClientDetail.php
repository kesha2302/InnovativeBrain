<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClientDetail extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'clientdetail';
    protected $primaryKey = 'client_id';

}
