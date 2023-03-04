<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Support\LazyCollection;
use Illuminate\Support\Str;

/**
 * @property string $disk
 * @property string $origin_name
 * @property string $file_name
 * @property integer $file_size
 * @property integer $number_of_rows
 *
 * @property LazyCollection $lazy_content
 * @property integer $category_id
 * @property string $category_name
 */
class ProductFile extends Model
{
    use HasFactory;

    protected $fillable = [
        'disk', 'origin_name', 'file_name', 'file_size', 'number_of_rows', 'status', 'hash',
    ];

    public function lazyContent(): Attribute
    {
        return Attribute::make(fn () => LazyCollection::make(function() {
            $filename = collect([
                Arr::get(array: config('filesystems'), key: 'disks.' . $this->disk . '.root'),
                $this->file_name
            ])->join('/');

            $handle = fopen(filename: $filename, mode: 'r');

            while(($line = fgets($handle)) !== false) {
                yield json_decode($line, true);
            }
        }));
    }
    public function categoryName(): Attribute
    {
        return Attribute::get(fn () => $this->parseCategory()->get(key: 'category_name'));
    }

    public function categoryId(): Attribute
    {
        return Attribute::get(fn () => (int) $this->parseCategory()->get(key: 'category_id'));
    }

    protected function parseCategory() : Collection
    {
        // alarms-buzzers-and-sirens-157_cluster.csv OR aluminum-electrolytic-capacitors-58_cluster.csv
        $name = collect(explode('_', $this->origin_name))->first(); // 删除后缀
        $delimiter = '｜';
        $keys = collect(['category_name', 'category_id']);

        $name_and_id = Str::of($name)
                          ->replaceLast(search: '-', replace: $delimiter)
                          ->explode(delimiter: $delimiter);

        return $keys->combine($name_and_id);
    }
}
