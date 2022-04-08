<?php

namespace Tests\Feature\Model;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MedicineTest extends TestCase
{
	use RefreshDatabase;

    public function test_medicine_page_can_be_rendered()
    {
		$user = User::factory()->create();
		$this->actingAs($user);

        $response = $this->get('/medicines');

        $response->assertStatus(200);
    }
}
