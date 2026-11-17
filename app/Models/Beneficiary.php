<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Beneficiary extends Model
{
    protected $fillable = [
        // Personal Information
        'first_name',
        'middle_name',
        'last_name',
        'suffix',
        'birth_date',
        'gender',
        'civil_status',

        // Contact Information
        'contact_number',
        'email',

        // Address Information
        'house_number',
        'street',
        'purok',
        'barangay',
        'municipality',
        'province',

        // 4Ps Information
        'household_id',
        'household_head',
        'relationship_to_household_head',
        'date_registered',
        'beneficiary_status',
    ];

    protected $casts = [
        'birth_date' => 'date',
        'date_registered' => 'date',
    ];
}
