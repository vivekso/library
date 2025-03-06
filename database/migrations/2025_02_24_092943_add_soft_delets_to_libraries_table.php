<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDeleteStatusToTblLibraries extends Migration
{
    public function up()
    {
        Schema::table('tbl_libraries', function (Blueprint $table) {
            if (!Schema::hasColumn('tbl_libraries', 'DeleteStatus')) {
                $table->tinyInteger('DeleteStatus')->default(0)->after('PinCode');
            }
        });
    }

    public function down()
    {
        Schema::table('tbl_libraries', function (Blueprint $table) {
            if (Schema::hasColumn('tbl_libraries', 'DeleteStatus')) {
                $table->dropColumn('DeleteStatus');
            }
        });
    }
}
