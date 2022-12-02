<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vendor_id')->default(NULL);
            $table->string('nameOfCompany')->nullable();
            $table->string('typesOfCompany')->nullable();
            $table->string('ceoname')->nullable();
            $table->string('establishmentYear')->nullable();
            $table->string('headOffice')->nullable();
            $table->string('regionalOffice1')->nullable();
            $table->string('regionalOffice2')->nullable();
            $table->string('regionalOffice3')->nullable();
            $table->string('factoryAddress1')->nullable();
            $table->string('factoryAddress2')->nullable();
            $table->string('factoryAddress3')->nullable();
            $table->string('GpsOfFactory')->nullable();
            $table->string('headOfficeLandline')->nullable();
            $table->string('headOfficeMobile')->nullable();
            $table->string('email')->nullable();
            $table->string('webSiteUrl')->nullable();
            $table->string('faxNumber')->nullable();
            $table->string('totalEmployee')->nullable();
            $table->string('companyExport')->nullable();
            $table->string('listOfCountries')->nullable();
            $table->string('nearestPorts')->nullable();
            $table->string('portName')->nullable();
            $table->string('forigenOffice')->nullable();
            $table->string('ntnNo')->nullable();
            $table->string('gstNo')->nullable();
            $table->string('webocID')->nullable();
            $table->string('fillerUpToDate')->nullable();
            $table->string('ntnCertificate')->nullable();
            $table->string('chamberOfCommerece')->nullable();
            $table->string('proTexCertificate')->nullable();
            $table->string('annualRs')->nullable();
            $table->string('bankStatename')->nullable();
            $table->string('accountNumber')->nullable();
            $table->string('bankName')->nullable();
            $table->string('bankBranch')->nullable();
            $table->string('branchCity')->nullable();
            $table->string('branchCode')->nullable();
            $table->integer('active')->default(0);
            $table->integer('seller_id')->unsigned();
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
        Schema::dropIfExists('companies');
    }
}
