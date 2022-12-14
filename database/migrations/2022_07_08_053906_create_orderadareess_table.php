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
        Schema::create('orderadareess', function (Blueprint $table) {
            $table->id();
            $table->text('user_id');
            $table->text('address');
            $table->text('flat');
            $table->text('landmark');
            $table->text('city');
            $table->text('state');
            $table->text('zip');
            $table->text('billingadress');
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
        Schema::dropIfExists('orderadareess');
    }
};
