<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartnerAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partner_addresses', function (Blueprint $table) {
            $table->id();
            $table->integer('mutif_store_master_id')->constrained('mutif_store_masters');
            $table->integer('prtnra_add_by')->constrained('users')->nullable();
            $table->integer('prtnra_upd_by')->constrained('users')->nullable();
            $table->string('district');
            $table->string('regency');
            $table->string('province');
            $table->string('phone_1')->nullable();
            $table->string('phone_2')->nullable();
            $table->string('fax_1')->nullable();
            $table->string('fax_2')->nullable();
            $table->string('addr_type')->default('bill');
            $table->string('zip');
            $table->text('comment')->nullable();
            $table->boolean('active')->default(1);
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
        Schema::dropIfExists('partner_addresses');
    }
}