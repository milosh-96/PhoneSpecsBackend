<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brands', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('logo_url')->nullable();
            $table->string('website')->nullable();
            $table->text('about')->nullable();
            $table->string('wiki_link')->nullable();

            //$table->timestamps();
        });

        DB::table('brands')->insert(array(
            ["name"=>"Nokia"],
            ["name"=>"Apple"],
            ["name"=>"Samsung"],
            ["name"=>"HTC"],
            ["name"=>"Huawei"],
            ["name"=>"Alcatel"],
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('brands');
    }
}
