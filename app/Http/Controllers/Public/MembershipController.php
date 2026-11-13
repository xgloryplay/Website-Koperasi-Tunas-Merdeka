<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\MembershipApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class MembershipController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'full_name' => ['required', 'string', 'max:150'],
            'email' => ['required', 'email', 'max:190'],
            'phone' => ['required', 'string', 'max:30'],
            'address' => ['required', 'string', 'max:2000'],
            'birth_date' => ['nullable', 'date', 'before:today'],
            'occupation' => ['nullable', 'string', 'max:120'],
            'purpose' => ['nullable', 'string', 'max:2000'],
            'website' => ['nullable', 'size:0'],
        ]);

        unset($data['website']);

        $data['application_number'] =
            'TM-' . now()->format('Ymd') . '-' .
            Str::upper(Str::random(6));

        $data['status'] = 'pending';

        MembershipApplication::create($data);

        return back()->with(
            'success',
            'Pengajuan berhasil diterima. Simpan nomor pengajuan untuk referensi.'
        );
    }
}
