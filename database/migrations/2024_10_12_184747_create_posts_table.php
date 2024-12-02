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
            $table->id();

            // Foreign key for user
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();

            // Foreign key for category
            $table->foreignId('category_id')->constrained()->cascadeOnDelete();

            // Other columns
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('body');
            $table->bigInteger('views')->default(0);
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
