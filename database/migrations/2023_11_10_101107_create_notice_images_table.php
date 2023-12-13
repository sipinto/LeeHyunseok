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
        Schema::create('notice_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('noticeId');
            $table->string('imgAdd');
            $table->string('imgName');
            $table->timestamps();

            $table->foreign('noticeId')->references('id')->on('notices')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('images');
    }
};
