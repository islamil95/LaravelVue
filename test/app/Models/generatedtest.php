<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class generatedtest extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $table = "generatedtest"; //Названиея таблиц должны быть в множественном числе
    protected $fillable = [
        'questionid',
        'userid',
        'hash',
    ];
}
