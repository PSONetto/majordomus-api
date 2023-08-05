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
        Schema::create('assignee_task', function (Blueprint $table) {
            $table->bigInteger('task_id')->unsigned();
            $table->foreign('task_id')->references('id')->on('tasks');
            $table->bigInteger('assignee_id')->unsigned();
            $table->foreign('assignee_id')->references('id')->on('assignees');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assignee_task');
    }
};
