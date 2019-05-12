<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentVoituresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comment_voitures', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('comment');
            $table->biginteger('voiture_id')->unsigned()->unique();
            $table->foreign('voiture_id')->references('id')->on('voitures');
            $table->timestamps();
        });
        Schema::table('comment_voitures', function (Blueprint $table) {
            $table->dropColumn('comment');

        });
        Schema::table('comment_voitures', function (Blueprint $table) {
            $table->string('comment_positive');
            $table->string('comment_negative');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::dropIfExists('comment_voitures');

    }
}
