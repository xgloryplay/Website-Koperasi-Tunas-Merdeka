<?php

namespace Tests\\Feature;

use App\\Models\\MembershipApplication;
use Illuminate\\Foundation\\Testing\\RefreshDatabase;
use Tests\\TestCase;

class PublicPagesTest extends TestCase
{
    use RefreshDatabase;

    public function test_public_pages_are_accessible(): void
    {
        foreach (['/', '/tentang', '/produk-layanan', '/keanggotaan', '/kontak', '/berita', '/publikasi'] as $path) {
            $this->get($path)->assertOk();
        }
    }

    public function test_membership_application_can_be_submitted(): void
    {
        $response = $this->post('/keanggotaan', [
            'full_name' => 'Anggota Contoh',
            'email' => 'anggota@example.com',
            'phone' => '081234567890',
            'address' => 'Jl. Merdeka No. 1',
            'birth_date' => '1990-01-01',
            'occupation' => 'Wiraswasta',
            'purpose' => 'Ingin bergabung dengan koperasi',
        ]);

        $response->assertRedirect();
        $response->assertSessionHas('success');

        $this->assertDatabaseHas('membership_applications', [
            'full_name' => 'Anggota Contoh',
            'email' => 'anggota@example.com',
            'status' => 'pending',
        ]);
        $this->assertSame(1, MembershipApplication::count());
    }

    public function test_membership_application_requires_contact_details(): void
    {
        $this->from('/keanggotaan')
            ->post('/keanggotaan', [])
            ->assertRedirect('/keanggotaan')
            ->assertSessionHasErrors(['full_name', 'email', 'phone', 'address']);
    }
}
