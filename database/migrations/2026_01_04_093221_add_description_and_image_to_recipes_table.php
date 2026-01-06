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
    Schema::table('recipes', function (Blueprint $table) {
        $table->text('description')->nullable()->after('category');
        $table->string('image')->nullable()->after('steps');
    });
}

public function down()
{
    Schema::table('recipes', function (Blueprint $table) {
        $table->dropColumn(['description', 'image']);
    });
}

};
