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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('location');
            $table->string('website')->nullable();
            $table->string('contact_email')->nullable();
            $table->string('phone_number')->nullable();
            $table->date('founded_date')->nullable();
            $table->integer('number_of_employees')->nullable();
            $table->string('logo_url')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('area')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
