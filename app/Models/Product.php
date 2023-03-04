<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\AsCollection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'overview' => AsCollection::class,
        'price' => AsCollection::class,
        'attributes' => AsCollection::class,
        'export' => AsCollection::class,
        'additional' => AsCollection::class,
        'photo' => 'array',
    ];
}
