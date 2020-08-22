<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // Declarar nombre de tabla
    protected $table = 'product';

    // Declarar llave primaria
    protected $primaryKey = 'id';
}
