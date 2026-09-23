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
    Schema::create('documentations', function (Blueprint $table) {

        $table->id();


        $table->foreignId('activity_id')
            ->constrained()
            ->cascadeOnDelete();


        $table->string('file_path');


        $table->enum('file_type',[
            'image',
            'video'
        ])
        ->default('image');


        $table->text('caption')
            ->nullable();


        $table->boolean('is_cover')
            ->default(false);


        $table->foreignId('uploaded_by')
            ->constrained('users')
            ->cascadeOnDelete();


        $table->timestamps();

    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documentations');
    }
};
