<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Szalami extends Model
{
    use HasFactory;
    protected $table = 'szalami';
    protected $primaryKey = 'id';
    protected $fillable = ['Termek neve', 'Termek ara/kg', 'termek alapanyaga', 'termek gyartasi ideje'];
}
