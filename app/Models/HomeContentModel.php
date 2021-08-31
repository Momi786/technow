<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeContentModel extends Model
{
    protected $table = 'home-content';
    protected $fillable = ["title","description","img"];
}
