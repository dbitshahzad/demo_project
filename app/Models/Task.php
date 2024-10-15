<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
   protected $table="register";
   protected $primarykey="id";
protected $fillable = [
    'Title',
    'description',
    'Start_date',
    'End_date',
    'Status',
    'Progress'
];

}
