<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Costumer extends Model
{
    protected $table = 'costumers';

    protected $primaryKey = 'id_costumers';
    public $incrementing = false; 
    protected $keyType = 'string'; 

    protected $fillable = [
        'id_costumers',
        'nama',
        'no_hp',
        'email',
    ];
}
