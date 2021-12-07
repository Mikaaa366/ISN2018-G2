<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class opakowanie extends Model
{
    use HasFactory;


    public $table = "opakowanie";
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'Rodzaj_opakowania',
        'Szerokosc',
        'Dlugosc',
        'Wysokosc',
        'Waga',
    ];
}