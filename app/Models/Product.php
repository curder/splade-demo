<?php
namespace App\Models;

use App\Models\Product\WithManyColumns;
use Illuminate\Database\Eloquent\Casts\AsCollection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    use WithManyColumns;

    protected $guarded = [];
    protected $casts = [
        'overview'   => AsCollection::class,
        'price'      => AsCollection::class,
        'attributes' => AsCollection::class,
        'export'     => AsCollection::class,
        'additional' => AsCollection::class,
        'photo'      => 'array',
    ];
    public static function getColumns(string $column)
    {
        return self::query()->pluck($column)->filter()->map->keys()->flatten()->unique()->values();
    }
}
