<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;
    protected $fillable = [
        "title" , 
        "description",
        "weeks",
        "enroll_cost",
        "minimum_skill",
        "bootcamp_id",
    ];
}
