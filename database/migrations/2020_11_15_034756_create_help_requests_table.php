<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHelpRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('help_requests', function (Blueprint $table) {
            $table->id();
            $table->string('fullname', 200)->nullable();
            $table->string('province', 200)->nullable();
            $table->date('birth_date')->nullable();
            $table->string('email', 200)->nullable();
            $table->string('contact_no', 200)->nullable();
            $table->string('gender', 200)->nullable();
            $table->string('assistance', 200)->nullable();
            $table->string('contact_no_other', 200)->nullable();
            $table->string('zone', 200)->nullable();
            $table->text('address')->nullable();
            $table->string('brgy_cpt_name', 200)->nullable();
            $table->string('name_of_mayor', 200)->nullable();
            $table->text('salaysay')->nullable();
            $table->string('actual_langitude', 200)->nullable();
            $table->string('actual_longitude', 200)->nullable();
            $table->string('image1', 200)->nullable();
            $table->string('image2', 200)->nullable();
            $table->string('image3', 200)->nullable();
            $table->string('status', 200)->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('help_requests');
    }
}
