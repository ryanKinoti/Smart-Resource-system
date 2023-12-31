<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('department_id')->nullable()->unsigned();
            $table->bigInteger('designation_id')->nullable()->unsigned();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('identifier')->default('EPE_');
            $table->string('email');
            $table->string('google_email')->nullable();
            $table->string('phone_number');
            $table->date('employed_date');
            $table->date('DOB');
            $table->timestamps();

            //relationships
            $table->foreign("designation_id")->references("id")->on("designations");
            $table->foreign("department_id")->references("id")->on("departments");
        });

        DB::update("ALTER TABLE employees AUTO_INCREMENT=101; ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
};
