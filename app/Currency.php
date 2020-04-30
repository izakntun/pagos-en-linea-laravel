<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    protected $primaryKey = 'iso';
    public $incrementing = false;
    /**
     * Variables llenadas masivamente
     *
     * @var array
     */
    protected $fillable = ['iso'];
}
