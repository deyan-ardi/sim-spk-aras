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
        Schema::create('kriteria_penilaians', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nama_kriteria');
            $table->string('keterangan');
            $table->tinyInteger('bobot_kriteria');
            $table->enum('status', ['aktif', 'nonaktif']);
            $table->enum('is_statis', [1, 0]);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kriteria_penilaians');
    }
};
