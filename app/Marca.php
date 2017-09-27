<?php

namespace distrivan;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    protected $table='marca_vehiculo';
    protected $primarykey='idmv';

    public $timestamps=false;

    protected $fillable=[
    'marca_vehiculo',
    'idtv';
    ];

    protected $guarded=[];

}
