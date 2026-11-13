<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MembershipApplication extends Model
{
    protected $fillable = [
        'application_number',
        'full_name',
        'email',
        'phone',
        'address',
        'birth_date',
        'occupation',
        'purpose',
        'status',
    ];

    protected function casts(): array
    {
        return [
            'birth_date' => 'date',
            'reviewed_at' => 'datetime',
        ];
    }
}
