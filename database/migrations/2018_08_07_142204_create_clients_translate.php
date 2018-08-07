<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTranslate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('clients', function (Blueprint $table) {
            $table->dropColumn('name');
        });

        Schema::create('clients_translate', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('clients_id')->unsigned();
            $table->string('locale')->index();

            $table->string('name', 200);

            $table->unique(['clients_id','locale']);
            $table->foreign('clients_id')->references('id')->on('clients')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients_translate');
    }
}
