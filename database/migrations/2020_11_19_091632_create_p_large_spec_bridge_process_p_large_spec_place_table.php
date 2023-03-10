<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePLargeSpecBridgeProcessPLargeSpecPlaceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('p_large_spec_bridge_process_p_large_spec_place', function (Blueprint $table) {
            $table->id();
            $table->integer('p_large_spec_bridge_process_id')
                ->index('p_large_spec_bridge_process_place_bridge_process_id_index');
            $table->integer('p_large_spec_place_id')
                ->index('p_large_spec_bridge_process_place_place_id_index');
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
        Schema::dropIfExists('p_large_spec_bridge_process_p_large_spec_place');
    }
}
