<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tablaclase extends Model
{
    use HasFactory;
    protected $table='tablaclases';
    protected $fillable=[
        'hora','clase'
    ];
 
    public $timestamp = false;
}
