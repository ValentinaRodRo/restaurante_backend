<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';

    public function up()
{
    Schema::create('products', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->decimal('price', 8, 2);
    
        $table->timestamps();
    });
}

    public function getCategoryName()
{
    $categories = [
        'Entree' => 'Entrada',
        'Main Course' => 'Plato Principal',
        'Drink' => 'Bebida',
        'Dessert' => 'Postre',
    ];

    return $categories[$this->category];
}
public function getImageUrl()
{
    return asset('images/' . $this->image);
}
}
