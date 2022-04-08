<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('transactions', function (Blueprint $table) {
			$table->id();
            $table->softDeletes();
			$table->foreignId('created_by')->
				constrained('users')->
				restrictOnUpdate()->
				restrictOnDelete();
            $table->integer('updated_count')->
				default(0);
			$table->foreignId('updated_by')->
				nullable()->
				constrained('users')->
				restrictOnUpdate()->
				restrictOnDelete();
			$table->foreignId('deleted_by')->
				nullable()->
				constrained('users')->
				restrictOnUpdate()->
				restrictOnDelete();
			$table->Boolean('is_active')->
				default(1);
            $table->Boolean('is_deleted')->
				default(0);
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('transactions');
	}
};
