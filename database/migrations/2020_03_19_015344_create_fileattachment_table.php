<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFileattachmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fileattachment', function (Blueprint $table) {
            $table->bigIncrements('user_id');
            $table->integer('Article_id')->nullable()->unsigned();
            $table->string('filename');
            $table->integer('bytes')->nullable()->unsigned();
            $table->string('mime')->nullable();
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
        Schema::dropIfExists('fileattachment');
    }
}
