<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class zamowienia extends Model
{
    use HasFactory;

    public $table = "zamowienia";
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'id_nadawca',
        'id_odbiorca',
        'Ilosc_sztuk',
        'Kwota',
        'id_opakowania',
        'reference_number',
        'sortownie',
    ];
}
