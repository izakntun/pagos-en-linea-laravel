<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentPlatform extends Model
{
    /**
     * Campos masivos
     *
     * @var array
     */
    protected $fillable = ['name', 'image'];
}
