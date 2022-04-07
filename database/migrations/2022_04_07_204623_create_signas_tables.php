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
        Schema::create('signas', function (Blueprint $table) {
            $table->id();
            $table->string('codename', 100);
            $table->string('name', 250);
            $table->text('additional_data');
            $table->softDeletes();
			$table->foreignId('created_by')->
				constrained('users')->
				restrictOnUpdate()->
				restrictOnDelete();
            $table->integer('updated_count');
			$table->foreignId('updated_by')->
				constrained('users')->
				restrictOnUpdate()->
				restrictOnDelete();
			$table->foreignId('deleted_by')->
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
        Schema::dropIfExists('signas');
    }
};
