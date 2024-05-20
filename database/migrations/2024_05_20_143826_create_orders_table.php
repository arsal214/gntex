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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('po_id')->unique();
            $table->foreignId('color_id')->references('id')->on('colors')->onDelete('cascade');
            $table->foreignId('size_id')->references('id')->on('sizes')->onDelete('cascade');
            $table->foreignId('supplier_id')->references('id')->on('suppliers')->onDelete('cascade');
            $table->foreignId('packing_id')->references('id')->on('packings')->onDelete('cascade');
            $table->foreignId('pcs_per_carton_id')->references('id')->on('pcs_per_cartons')->onDelete('cascade');
            $table->foreignId('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreignId('product_construction_id')->references('id')->on('product_constructions')->onDelete('cascade');
            $table->text('product_descriptions')->nullable();
            $table->text('no_cartoon')->nullable();
            $table->text('marking')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
