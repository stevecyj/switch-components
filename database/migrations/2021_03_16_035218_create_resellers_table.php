<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResellersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_test')->create('cert', function (Blueprint $table) {
            $table->id();
            $table->boolean('confirmed');
            $table->ipAddress('visitor');
            $table->string('hostname')->comment('主機名');
            $table->string('main_group', 20);
            $table->string('sub_group', 20);
            $table->tinyInteger('monitor')->comment('是否監控');
            $table->tinyInteger('alert');
            $table->string('community', 30);
            $table->string('email')->nullable();
            $table->string('note', 255);
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
        Schema::connection('mysql_test')->dropIfExists('cert');
    }
}
