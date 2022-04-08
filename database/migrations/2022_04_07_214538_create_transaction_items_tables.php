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
        Schema::create('transaction_items', function (Blueprint $table) {
            $table->id();
			$table->foreignId('transaction_id')->
				constrained('transactions')->
				restrictOnUpdate()->
				restrictOnDelete();
            $table->Boolean('is_recipe');
			$table->foreignId('medicine_id')->
				nullable()->
				constrained('medicines')->
				restrictOnUpdate()->
				restrictOnDelete();
			$table->foreignId('recipe_id')->
				nullable()->
				constrained('recipes')->
				restrictOnUpdate()->
				restrictOnDelete();
            $table->decimal('amount', 15, 2);
			$table->foreignId('signa_id')->
				constrained('signas')->
				restrictOnUpdate()->
				restrictOnDelete();
            $table->softDeletes();
            $table->integer('updated_count');
			$table->foreignId('created_by')->
				constrained('users')->
				restrictOnUpdate()->
				restrictOnDelete();
			$table->foreignId('updated_by')->
				constrained('users')->
				restrictOnUpdate()->
				restrictOnDelete();
			$table->foreignId('deleted_by')->
				nullable()->
				constrained('users')->
				restrictOnUpdate()->
				restrictOnDelete();
            $table->Boolean('is_active');
            $table->Boolean('is_deleted');
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
        Schema::dropIfExists('transaction_items');
    }
};
