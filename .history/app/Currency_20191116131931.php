<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    /**
     * Variables llenadas masivamente
     *
     * @var array
     */
    protected $fillable = ['iso'];
}
