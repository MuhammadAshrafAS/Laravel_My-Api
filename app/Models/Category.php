<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // Kolom yang boleh diisi user
    protected $fillable = ['name'];

    // Relasi: Satu kategori punya banyak produk
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}