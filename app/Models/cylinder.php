<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class cylinder extends Model
{
    protected $table = 'cylinder';
    protected $primaryKey  = 'id';
    protected $fillable = [
        'name',
        'status',
    ];
}
