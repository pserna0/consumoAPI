<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class apiPersonajes extends Model
{
  
    protected $table = 'api_personajes';

    protected $fillable = [
        'api_id',
        'name',
        'status',
        'species',
        'type',
        'gender',
        'origin_name',
        'origin_url',
        'image'
    ];

    public $incrementing = false;
    
    protected $primaryKey = 'api_id';
}