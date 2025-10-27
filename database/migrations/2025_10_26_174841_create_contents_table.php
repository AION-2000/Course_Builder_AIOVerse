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
    Schema::create('contents', function (Blueprint $table) {
        $table->id();
        $table->text('text_content')->nullable();
        $table->string('image_path')->nullable();
        $table->string('video_path')->nullable();
        $table->string('link_url')->nullable();
        // This creates a link to the 'modules' table
        $table->foreignId('module_id')->constrained()->onDelete('cascade');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contents');
    }
};
