<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIntroducesTranslate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('introduces', function (Blueprint $table) {
            $table->dropColumn('name');
            $table->dropColumn('content');
        });

        Schema::create('introduces_translate', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('introduces_id')->unsigned();
            $table->string('locale')->index();

            $table->string('name', 255);
            $table->text('content');

            $table->unique(['introduces_id','locale']);
            $table->foreign('introduces_id')->references('id')->on('introduces')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('introduces_translate');
    }
}
