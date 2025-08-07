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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            $table->string('image')->nullable();
            $table->float('price' );
            $table->integer('quantity') ->default(0);
            $table->longText('description');
            $table->timestamps();
            $table->boolean('status');

            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
