<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('edit_requests', function (Blueprint $table) {
        $table->text('new_data')->nullable()->after('status'); 
    });
}

public function down()
{
    Schema::table('edit_requests', function (Blueprint $table) {
        $table->dropColumn('new_data');
    });
}

};
