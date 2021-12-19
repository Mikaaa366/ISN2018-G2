<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sortownie extends Model
{
    use HasFactory;

    public $table = "sortownie";
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'nazwa_sortowni',
        'miasto',
        'ulica',
        'numer',
        'województwo',
    ];
}