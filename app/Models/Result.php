<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;

    protected $fillable=['name', 'roll', 'sub1', 'sub2', 'sub3', 'sub4', 'sub5', 'sub6'];
}
