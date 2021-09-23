<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FooterModel extends Model
{
    protected $table = 'footer';
    protected $fillable = ['address', 'email' , 'phone', 'description'];
}
