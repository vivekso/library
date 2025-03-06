<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('tbl_libraries', function (Blueprint $table) {
            $table->boolean('DeleteStatus')->default(0)->after('PinCode');
        });
    }

    public function down()
    {
        Schema::table('tbl_libraries', function (Blueprint $table) {
            $table->dropColumn('DeleteStatus');
        });
    }
};
