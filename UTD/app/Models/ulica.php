<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ulica extends Model
{
    use HasFactory;


    public $table = "ulica";
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'Nazwa_ulicy',
        'Numer_domu',
        'Numer_mieszkania',
        'id_miasta',
    ];
}