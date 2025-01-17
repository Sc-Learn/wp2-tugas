<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    /**
     * Atribut yang dapat diisi (mass-assignment).
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'author',
        'publisher',
        'stock',
        'price',
        'year',
        'description'
    ];

    /**
     * Atribut yang akan di-casting ke tipe data tertentu.
     *
     * @var array
     */
    protected $casts = [
        'stock' => 'integer',
        'price' => 'integer',
        'year' => 'integer'
    ];
}
