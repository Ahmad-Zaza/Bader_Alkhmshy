<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyVisionSectionsTable extends Migration
{

    public function up()
    {
        Schema::table('vision_sections', function (Blueprint $table) {
            $table->string('vision_title');
            $table->longText('vision_content');
            $table->string('mission_title');
            $table->longText('mission_content');
            $table->text('image');
        });
    }


    public function down()
    {
        Schema::table('vision_sections', function (Blueprint $table) {
            $table->dropColumn('vision_title');
            $table->dropColumn('vision_content');
            $table->dropColumn('mission_title');
            $table->dropColumn('mission_content');
            $table->dropColumn('image');
        });
    }
}
