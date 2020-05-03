<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateManifestationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manifestations', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['suggestion', 'compliment', 'report', 'complaint', 'solicitation']);
            $table->date('manifestation_date')->default(DB::raw('CURDATE()'));
            $table->string('complainer');
            $table->string('complainer_phone');
            $table->string('complainer_email');
            $table->text('description');
            $table->integer('id_user');
            $table->integer('id_department');
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
        Schema::dropIfExists('manifestations');
    }
}
