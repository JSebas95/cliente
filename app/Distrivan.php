<?php

namespace distrivan;

use Illuminate\Database\Eloquent\Model;

class Distrivan extends Model
{
    protected $table='tipo_vehiculo';
    protected $primarykey='idtv';

    public $timestamps=false;

    protected $fillable=[
    'nombre';
    ];

    protected $guarded=[];
}
