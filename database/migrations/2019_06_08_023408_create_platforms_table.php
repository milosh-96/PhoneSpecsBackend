<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlatformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('platforms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('full_name')->nullable();
            $table->integer('version')->nullable();
            $table->string('developer')->nullable();
            $table->dateTime('announced')->nullable();
            $table->dateTime('released')->nullable();
            $table->timestamps();
        });

        DB::table('platforms')->insert(array(
            ["name"=>"Android 5","full_name"=>"Android 5 Lollipop","version"=>5,"developer"=>"Google"],
            ["name"=>"Android 6","full_name"=>"Android 6 Marshmallow","version"=>6,"developer"=>""],
            ["name"=>"iOS 11","full_name"=>"iOS 11","version"=>11,"developer"=>"Apple"],
            ["name"=>"iOS 12","full_name"=>"iOS 12","version"=>12,"developer"=>"Apple"],
            ["name"=>"Windows 8.1","full_name"=>"Windows 10 Mobile","version"=>8.1,"developer"=>"Microsoft"],
            ["name"=>"Windows 10","full_name"=>"Windows 10 Mobile","version"=>10,"developer"=>"Microsoft"]

        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('platforms');
    }
}
