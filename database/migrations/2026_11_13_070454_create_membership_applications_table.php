<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('membership_applications', function (Blueprint $table) {
            $table->id();
            $table->string('application_number', 40)->unique();
            $table->string('full_name', 150);
            $table->string('email', 190);
            $table->string('phone', 30);
            $table->text('address');
            $table->date('birth_date')->nullable();
            $table->string('occupation', 120)->nullable();
            $table->text('purpose')->nullable();
            $table->string('status', 20)->default('pending');
            $table->text('admin_notes')->nullable();
            $table->timestamp('reviewed_at')->nullable();
            $table->timestamps();

            $table->index(['status', 'created_at']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('membership_applications');
    }
};
