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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description')->nullable();
            $table->timestampTz('due_date');
            $table->bigInteger('priority_id')->unsigned();
            $table->foreign('priority_id')->references('id')->on('priorities')
                ->onDelete('restrict')->onUpdate('cascade');
            $table->bigInteger('status_id')->unsigned();
            $table->foreign('status_id')->references('id')->on('statuses')
                ->onDelete('restrict')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
