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
        Schema::create('invitations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('guest_id');
            $table->enum('invitation_status', ['Sent', 'RSVPed']);
            $table->timestamp('invitation_sent_timestamp')->nullable();
            $table->enum('invitation_rsvp_response', ['yes', 'no', 'maybe'])->nullable();
            $table->timestamp('invitation_rsvp_timestamp')->nullable();
            $table->integer('invitation_num_of_guests')->nullable();
            $table->text('invitation_wishes')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('guest_id')->references('id')->on('guests');
        });
    }

    public function down()
    {
        Schema::dropIfExists('invitations');
    }
};
