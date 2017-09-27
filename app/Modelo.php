<?php

namespace distrivan;

use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
    protected $table='modelo';
    protected $primarykey='idmodelo';

    public $timestamps=false;

    protected $fillable=[
    'modelo';
    ];

    protected $guarded=[];
}

