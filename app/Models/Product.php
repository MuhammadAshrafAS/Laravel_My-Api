<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id', 'name', 'price', 'stock', 'description', 'image'
    ];

    public function category()
    {
        // Produk ini milik satu kategori
        return $this->belongsTo(Category::class);
    }
}

public function up(): void
{
    Schema::create('products', function (Blueprint $table) {
        $table->id();
        // Foreign Key ke tabel categories
        $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
        
        $table->string('name');
        $table->integer('price');
        $table->integer('stock');
        $table->text('description')->nullable();
        $table->timestamps();
    });
}
