<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class Logs extends Model
{
    //
    //rotected $connection = 'mongodb';   // fuerza usar Mongo
    //protected $collection = 'logs';      // nombre de la colección

    protected $fillable = ['action', 'ip', 'data'];
}
