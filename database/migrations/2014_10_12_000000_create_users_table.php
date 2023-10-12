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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('introduce')->default('Người mua hàng thân thiện');
            $table->integer('age')->default(18);
            $table->string('phone')->default('000000000');
            $table->string('photo')->default('bg_user.png');
            $table->string('address')->default('Hồ Chí Minh');
            $table->string('email')->unique();
            $table->string('userType')->default('USR');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
