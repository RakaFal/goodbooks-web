<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'author',
        'category_id',
        'price',
        'stock',
        'publisher',
        'publish_date',
        'isbn',
        'pages',
        'language',
        'length',
        'width',
        'weight',
        'image'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($book) {
            $book->slug = Str::slug($book->title);
        });
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'id_category');
    }
}