<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeneralCommissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('general_commissions', function (Blueprint $table) {
            $table->id();
            // Course Details
            $table->integer('course_id')->default(0);
            //Coordinator Commision Details
            $table->text('coordinator_point')->nullable();
            $table->text('coordinator_dsc');
            $table->text('coordinator_idsc');
            $table->text('coordinator_gmdc');
            $table->text('coordinator_gsdc');
            $table->text('coordinator_gsrc');
            //Main Dealer Commision Details
            $table->text('main_dealer_point')->nullable();
            $table->text('main_dealer_dsc');
            $table->text('main_dealer_idsc');
            $table->text('main_dealer_gsdc');
            $table->text('main_dealer_gsrc');
            //Sub Dealer Commision Details
            $table->text('sub_dealer_point')->nullable();
            $table->text('sub_dealer_dsc');
            $table->text('sub_dealer_idsc');
            $table->text('sub_dealer_gsrc');
            //Sale Rep Commision Details
            $table->text('sales_rep_point')->nullable();
            $table->text('sales_rep_dsc');
            $table->text('sales_rep_idsc');
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
        Schema::dropIfExists('general_commissions');
    }
}
