<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tickets extends Model
{
    use HasFactory;
    protected $table="tickets";
    protected $primaryKey="id";
    protected $fillable = [
        'numero','fecha','producto','numpro','precio','idmesa','descripcion'
    ];
    public $timestamps = false;
}
