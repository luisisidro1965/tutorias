<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Lugar;

class Lugar extends Model
{
    use HasFactory;

    protected $table = "lugares";
}
