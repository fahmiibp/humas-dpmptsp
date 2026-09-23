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
    Schema::create('activities', function (Blueprint $table) {

        $table->id();

        $table->foreignId('category_id')
            ->constrained()
            ->cascadeOnDelete();


        $table->foreignId('created_by')
            ->constrained('users')
            ->cascadeOnDelete();


        $table->string('title');

        $table->string('slug')
            ->unique();


        $table->date('start_date');

        $table->date('end_date')
            ->nullable();


        $table->time('start_time')
            ->nullable();

        $table->time('end_time')
            ->nullable();


        $table->string('location');


        $table->string('pic_name');

        $table->string('pic_phone')
            ->nullable();


        $table->longText('description')
            ->nullable();


        $table->enum('status',[
            'draft',
            'scheduled',
            'ongoing',
            'completed',
            'cancelled'
        ])
        ->default('draft');


        $table->string('cover_photo')
            ->nullable();


        $table->string('google_drive_url')
            ->nullable();


        $table->timestamps();

    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activities');
    }
};
