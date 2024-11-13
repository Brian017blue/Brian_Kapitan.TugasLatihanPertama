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
        Schema::create('edit_requests', function (Blueprint $table) {
        $table->id();
        $table->foreignId('kelas_id')->constrained('kelas')->onDelete('cascade');
        $table->string('user_id')->onDelete('cascade');
        $table->text('new_data')->nullable()->change(); 
        $table->string('status');
        $table->timestamps();
           });
    }

    public function down(): void
    {
        Schema::dropIfExists('edit_requests');
    }
};
