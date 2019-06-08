<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDevicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('brand_id');
            $table->string('name');
            $table->string('phone_picture')->nullable();
            $table->string('full_name')->nullable();
            $table->string('phone_codename')->nullable();
            $table->integer('platform_id')->nullable()->default(1);
            $table->string('platform_note')->nullable();
            $table->integer('price')->nullable()->default(20);
            $table->integer('min_price')->nullable();
            $table->integer('max_price')->nullable();

            /* Specs */
            $table->string('gpu')->nullable();
            $table->string('cpu')->nullable();
            $table->string('ram_mb')->nullable();
            $table->string('internal_memory_mb')->nullable();
            $table->string('internal_memory_up_to_mb')->nullable();
            $table->string('screen_type')->nullable();
            // More to come //
            $table->timestamps();
        });

        DB::table('devices')->insert(array(
            [
                "brand_id"=>1,
                "name"=>"Lumia 920",
                "phone_picture"=>"https://images-na.ssl-images-amazon.com/images/I/61RyyOfknBL._SX569_.jpg",
                "platform_id"=>5,
                "platform_note"=>"Windows 10 Mobile could be installed, but it isn't officialy supported by Microsoft.",
                "price"=>70,
                "min_price"=>50,
                "max_price"=>120,
                "gpu"=>"Adreno 225",
                "cpu"=>"Dual-core 1.5 GHz Krait",
                "ram_mb"=>1024,
                "internal_memory_mb"=>32000,
                "screen_type"=>"IPS LCD"
            ]
        
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('devices');
    }
}
