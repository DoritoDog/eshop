<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ExtendUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('surname')->after('name');
            $table->string('phone');
            $table->string('company_name');
            $table->integer('vat');
            $table->string('company_address1');
            $table->string('company_address2');
            $table->string('company_city');
            $table->string('company_postal_code');
            $table->string('country');
            $table->string('invoice_email');
            $table->string('tracking_email');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('phone');
            $table->dropColumn('company_name');
            $table->dropColumn('vat');
            $table->dropColumn('company_address1');
            $table->dropColumn('company_address2');
            $table->dropColumn('company_city');
            $table->dropColumn('company_postal_code');
            $table->dropColumn('country');
            $table->dropColumn('invoice_email');
            $table->dropColumn('tracking_email');
        });
    }
}
