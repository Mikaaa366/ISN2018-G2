<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class miasto extends Model
{
    use HasFactory;


    public $table = "miasto";
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'Nazwa_miasta',
        'Kod_pocztowy',
        'Wojewodztwo',
    ];
}