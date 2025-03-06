<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('tbl_libraries', function (Blueprint $table) {
            $table->id();
            $table->string('LibraryName');
            $table->string('City');
            $table->text('Address');
            $table->decimal('BuyPrice', 10, 2);
            $table->text('AboutLibrary')->nullable();
            $table->string('PinCode', 6);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('tbl_libraries');
    }
};
