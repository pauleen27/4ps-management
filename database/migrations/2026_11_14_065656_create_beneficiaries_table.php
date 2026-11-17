<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('beneficiaries', function (Blueprint $table) {
            $table->id();

            // Personal Information
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('suffix')->nullable();
            $table->date('birth_date');
            $table->string('gender');
            $table->string('civil_status');

            // Contact Information
            $table->string('contact_number')->nullable();
            $table->string('email')->nullable();

            // Address Information
            $table->string('house_number')->nullable();
            $table->string('street')->nullable();
            $table->string('purok');
            $table->string('barangay');
            $table->string('municipality');
            $table->string('province');

            // 4Ps Information
            $table->string('household_id')->unique();
            $table->string('household_head');
            $table->string('relationship_to_household_head');
            $table->date('date_registered')->nullable();
            $table->string('beneficiary_status')->default('Active');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('beneficiaries');
    }
};
