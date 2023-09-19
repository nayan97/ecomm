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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->string('description') -> nullable();
            $table->string('category') -> nullable();
            $table->string('price') -> nullable();
            $table->string('dis_price') -> nullable();
            $table->text('photo') -> nullable();
            $table->boolean('status') -> default(true);
            $table->boolean('trash') -> default(false);;
            $table->timestamps();
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
