<?php

namespace distrivan;

use Illuminate\Database\Eloquent\Model;

class Cilindraje extends Model
{
    protected $table='cilindraje';
    protected $primarykey='idcilindraje';

    public $timestamps=false;

    protected $fillable=[
    'cilindraje';
    ];

    protected $guarded=[];
}
