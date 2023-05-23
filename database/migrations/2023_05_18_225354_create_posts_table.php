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
        Schema::create('posts', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('image',150);
            $table->string('titre',200);
            $table->text('description');
            $table->string('adress',250);
            $table->decimal('prix',8,2);
            $table->boolean('etat')->default(false);
            $table->foreignId('type_id')->references('id')->on('types')->cascadeOnDelete();// delete posts auto if type was deleted
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
