<?php

namespace Tests\Feature\Model;

use App\Models\User;
use App\Models\Medicine;
use App\Http\Controller\MedicineController;
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
    public function test_medicine_form_page_can_be_rendered()
    {
		$user = User::factory()->create();
		$this->actingAs($user);

        $response = $this->get('/medicines/create');

        $response->assertStatus(200);
    }

	public function test_medicine_creation()
	{
		$user = User::factory()->create();
		$this->actingAs($user);

		Medicine::factory()->count(5)->create();
		$this->assertDatabaseCount('medicines', 5);
	}

	public function test_medicine_update()
	{
		$user = User::factory()->create();
		$this->actingAs($user);

		$medicine = Medicine::factory()->create();
		$medicine->update(['name' => 'UPDATED']);
		$this->assertDatabaseHas('medicines', [
			'name' => 'UPDATED'
		]);
	}

	public function test_medicine_deletion()
	{
		$user = User::factory()->create();
		$this->actingAs($user);

		$medicine = Medicine::factory()->create();
		$medicine->delete();
		$this->assertSoftDeleted($medicine);
	}
}
