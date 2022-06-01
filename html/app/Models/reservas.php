<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservas extends Model
{
    use HasFactory;
    protected $table="reservas";
    protected $primaryKey="id";
    protected $fillable = [
        'turno','fecha','telefono','nombre','personas','idmesa','numero','zona','descripcion'
    ];
    public $timestamps = false;
}
