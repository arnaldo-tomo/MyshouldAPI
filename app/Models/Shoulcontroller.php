<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shoulcontroller extends Model
{
    use HasFactory;
    protected $table = 'shoulcontrollers';
    protected $fillable = ['Should', 'descrypt'];
}
