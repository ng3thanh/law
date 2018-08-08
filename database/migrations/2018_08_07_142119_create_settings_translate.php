<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTranslate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('settings', function (Blueprint $table) {
            $table->dropColumn('name');
            $table->dropColumn('value');
        });

        Schema::create('settings_translate', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('settings_id')->unsigned();
            $table->string('locale')->index();

            $table->string('name');
            $table->text('value')->nullable();

            $table->unique(['settings_id','locale']);
            $table->foreign('settings_id')->references('id')->on('settings')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings_translate');
    }
}
