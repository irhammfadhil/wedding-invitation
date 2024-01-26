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
        Schema::create('guests', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('phone_number')->nullable();
            $table->timestamps(); // This will create created_at and updated_at columns.
            $table->softDeletes(); // This will create deleted_at column for soft deletes.
        });
    }

    public function down()
    {
        Schema::dropIfExists('guests');
    }
};
