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
    Schema::create('content_planners', function (Blueprint $table) {

        $table->id();


        $table->foreignId('activity_id')
            ->nullable()
            ->constrained()
            ->cascadeOnDelete();


        $table->string('title');


        $table->enum('platform',[
            'website',
            'instagram',
            'facebook',
            'youtube',
            'tiktok'
        ]);


        $table->date('publish_date')
            ->nullable();


        $table->longText('caption')
            ->nullable();


        $table->enum('status',[
            'draft',
            'review',
            'approved',
            'published'
        ])
        ->default('draft');


        $table->string('publish_url')
            ->nullable();


        $table->foreignId('created_by')
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
        Schema::dropIfExists('content_planners');
    }
};
