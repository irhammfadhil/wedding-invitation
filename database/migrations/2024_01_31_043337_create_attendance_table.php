<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('attendance', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('invitation_id');
            $table->integer('number_of_guests');
            $table->timestamps();
            $table->softDeletes();

            // Foreign key constraint
            $table->foreign('invitation_id')
                  ->references('id')
                  ->on('invitations')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('attendance');
    }
};
