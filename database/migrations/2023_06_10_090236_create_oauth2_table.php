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
        Schema::create('oauth2', function (Blueprint $table) {
            $table->id();
            $table->string('client_id')->nullable();
            $table->string('client_secret')->nullable();
            $table->string('scope')->nullable();
            $table->string('grant_token')->nullable();
            $table->dateTime('grant_token_expire_at')->nullable();
            $table->string('access_token')->nullable();
            $table->dateTime('access_token_expire_at')->nullable();
            $table->string('refresh_token')->nullable();
            $table->string('redirect_uri')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('oauth2');
    }
};
