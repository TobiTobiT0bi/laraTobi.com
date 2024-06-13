<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('brands', function (Blueprint $table) {
            $table->id();
            $table->string('brand');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title')->unique();
            $table->text('description');
            $table->integer('price');
            $table->foreignId('brand_id')->constrained();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('parent_id')->constrained(
                table: 'categories',
                indexName: 'id'
            );
            $table->string('name');
            $table->softDeletes();
        });

        Schema::create('category_product', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained();
            $table->foreignId('product_id')->constrained();
            $table->unique(['category_id', 'product_id']);
        });

        Schema::create('brand_product', function (Blueprint $table) {
            $table->id();
            $table->foreignId('brand_id')->constrained();
            $table->foreignId('product_id')->constrained();
            $table->unique(['brand_id', 'product_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
