<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;


    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'name', 'slug', 'image'
    ];

    /**
     * places : one to many
     *
     * @return void
     */
    public function places()
    {
        return $this->hasMany(Place::class);
    }

    /**
     * getImageAttribute
     * output : domain.com/storage/categories/nama_file_image.png
     * @param  mixed $image
     * @return void
     */
    public function getImageAttribute($image)
    {
        return asset('storage/categories/' . $image);
    }
}
