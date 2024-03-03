<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda' , 64);
            $table->string('stazione_di_partenza' , 64);
            $table->string('stazione_di_arrivo' , 64);
            $table->time('orario_di_partenza');
            $table->time('orario_di_arrivo');
            $table->string('codice_del_treno' , 7)->unique();
            $table->tinyInteger('numero_di_carrozze')->nullable();
            $table->boolean('in orario')->default(true);
            $table->boolean('cancellato')->default(false);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
