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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
			$table->string('name');
			$table->string('unm');
			$table->string('pass');
			$table->string('gen');
			$table->string('lag');
			$table->unsignedBigInteger('cid');
			$table->foreign('cid')->references('id')->on('countries');
			$table->string('file');
			$table->enum('status', ['Block','Unblock'])->default('Unblock');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
