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
        'arquivo',
        'userId',
    ];
    // protected $attributes = [
    //     'useId' => $user = Auth::id()
    // ];

    public $rules = [
        'name' => 'min:3|max:100',
        'description' => 'min:10|max:250',
        'value' => 'numeric|min:1|max:1000000',
        ]; 

    public $messages = [
        'name.min' => 'O campo nome precisa ter pelo menos 3 caracteres',
        'values.min' => 'O produto deve ser vendido a no minimo 1 real',
        'value.max' => 'O valor maximo é 1 Milhao'
        ];
}
