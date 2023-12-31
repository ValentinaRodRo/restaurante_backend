<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public function products()
{
    return $this->belongsToMany(Product::class)->withPivot('quantity');
}
public function up()
{
    Schema::create('orders', function (Blueprint $table) {
        
        $table->string('estado')->default('pendiente'); 
        $table->timestamps();
    });
}
}
