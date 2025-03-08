<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Origin extends Model
{
    //
    protected $table = 'origin_table';
    protected $primaryKey  = 'id';
    protected $fillable = [
        'name',
        'status',
    ];
}
