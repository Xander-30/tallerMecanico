<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventaries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nameproduct');
            $table->string('description');
            
            $table->float('price', 8,2);
            $table->bigInteger('stock');
            $table->string('supplier');
            $table->string('phone');
            $table->string('direction');
           //$table->string('state', 20)->nullable()->after('direction');
            $table->foreignId('horario_id')->nullable()->constrained('schedules');
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('client_id')->nullable()->constrained('clients');
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
        Schema::dropIfExists('inventaries');
    }
};
