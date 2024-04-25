<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anuncio extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'value',
        'imagem',
    ];
    protected $attributes = [
        'useId' => $user = Auth::id()
    ];
}
