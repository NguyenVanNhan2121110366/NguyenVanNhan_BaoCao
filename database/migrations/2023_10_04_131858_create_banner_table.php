<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('db_banner', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("image");
            $table->string("link")->nullable();
            $table->string("position");
            $table->string("description");

            $table->unsignedInteger('created_by');
            $table->unsignedInteger('update_by')->nullable();
            $table->timestamps();
            $table->unsignedTinyInteger('status')->default(2);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('db_banner');
    }
};