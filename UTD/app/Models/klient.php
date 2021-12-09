<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class klient extends Model
{
    use HasFactory;

    public $table = "klient";
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'imie',
        'nazwisko',
        'data_urodzenia',
        'id_ulicy',
        'email',
        'phonenumber',
    ];
}
