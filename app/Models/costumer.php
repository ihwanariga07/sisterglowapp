<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Costumer extends Model
{
    use HasFactory;

    protected $table = 'tbl_costumers'; 
    protected $primaryKey = 'id_costumers'; 
    public $incrementing = false; 
    protected $keyType = 'string'; 

    protected $fillable = [
        'id_costumers',
        'nama',
        'no_hp',
        'email'
    ];
}
