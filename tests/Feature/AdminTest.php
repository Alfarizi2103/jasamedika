<?php

namespace Tests\Feature;

use App\Models\Kelurahan;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AdminTest extends TestCase
{

    use RefreshDatabase;

    public function test_admin_input_data_kelurahan(): void
    {
        $data = [
            'kelurahan' => 'Test',
            'kecamatan' => 'Test',
            'kota' => 'Test',
        ];

        $create = Kelurahan::create($data);

        $this->assertInstanceOf(Kelurahan::class, $create);
        $this->assertDatabaseHas('Kelurahans', [
            'kelurahan' => 'Test',
            'kecamatan' => 'Test',
            'kota' => 'Test',
        ]);
    }

    public function test_admin_update_data_kelurahan(): void
    {
        $data = [
            'kelurahan' => 'Test',
            'kecamatan' => 'Test',
            'kota' => 'Test',
        ];

        $kelurahan = Kelurahan::create($data);

        $kelurahan->kelurahan = 'Test Update';
        $kelurahan->save();

        $this->assertEquals('Test Update', $kelurahan->kelurahan);
        $this->assertDatabaseHas('Kelurahans', [
            'id' => $kelurahan->id,
            'kelurahan' => 'Test Update',
        ]);
    }
}
