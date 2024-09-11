<?php
// database/migrations/2024_09_04_201909_create_products_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->decimal('price', 8, 2); 
            $table->foreignId('category_id')->constrained()->onDelete('cascade'); 
            $table->timestamps(); 
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}

