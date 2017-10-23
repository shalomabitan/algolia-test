<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('records', function (Blueprint $table) {
            $table->increments('id');
            $table->text('change_type')->nullable();
            $table->text('covered_recipient_type')->nullable();
            $table->text('teaching_hospital_ccn')->nullable();
            $table->text('teaching_hospital_id')->nullable();
            $table->text('teaching_hospital_name')->nullable();
            $table->text('physician_profile_id')->nullable();
            $table->text('physician_first_name')->nullable();
            $table->text('physician_middle_name')->nullable();
            $table->text('physician_last_name')->nullable();
            $table->text('physician_name_suffix')->nullable();
            $table->text('recipient_primary_business_street_address_line1')->nullable();
            $table->text('recipient_primary_business_street_address_line2')->nullable();
            $table->text('recipient_city')->nullable();
            $table->text('recipient_state')->nullable();
            $table->text('recipient_zip_code')->nullable();
            $table->text('recipient_country')->nullable();
            $table->text('recipient_province')->nullable();
            $table->text('recipient_postal_code')->nullable();
            $table->text('physician_primary_type')->nullable();
            $table->text('physician_specialty')->nullable();
            $table->text('physician_license_state_code1')->nullable();
            $table->text('physician_license_state_code2')->nullable();
            $table->text('physician_license_state_code3')->nullable();
            $table->text('physician_license_state_code4')->nullable();
            $table->text('physician_license_state_code5')->nullable();
            $table->text('submitting_applicable_manufacturer_or_applicable_gpo_name')->nullable();
            $table->text('applicable_manufacturer_or_applicable_gpo_making_payment_id')->nullable();
            $table->text('applicable_manufacturer_or_applicable_gpo_making_payment_name')->nullable();
            $table->text('applicable_manufacturer_or_applicable_gpo_making_payment_state')->nullable();
            $table->text('applicable_manufacturer_or_applicable_gpo_making_payment_country')->nullable();
            $table->double('total_amount_of_payment_usdollars', 15, 8)->nullable();
            $table->timestamp('date_of_payment')->nullable();
            $table->double('number_of_payments_included_in_total_amount', 15, 8)->nullable();
            $table->text('form_of_payment_or_transfer_of_value')->nullable();
            $table->text('nature_of_payment_or_transfer_of_value')->nullable();
            $table->text('city_of_travel')->nullable();
            $table->text('state_of_travel')->nullable();
            $table->text('country_of_travel')->nullable();
            $table->text('physician_ownership_indicator')->nullable();
            $table->text('third_party_payment_recipient_indicator')->nullable();
            $table->text('name_of_third_party_entity_receiving_payment_or_transfer_of_value')->nullable();
            $table->text('charity_indicator')->nullable();
            $table->text('third_party_equals_covered_recipient_indicator')->nullable();
            $table->text('contextual_information')->nullable();
            $table->text('delay_in_publication_indicator')->nullable();
            $table->text('record_id')->nullable();
            $table->text('dispute_status_for_publication')->nullable();
            $table->text('product_indicator')->nullable();
            $table->text('name_of_associated_covered_drug_or_biological1')->nullable();
            $table->text('name_of_associated_covered_drug_or_biological2')->nullable();
            $table->text('name_of_associated_covered_drug_or_biological3')->nullable();
            $table->text('name_of_associated_covered_drug_or_biological4')->nullable();
            $table->text('name_of_associated_covered_drug_or_biological5')->nullable();
            $table->text('ndc_of_associated_covered_drug_or_biological1')->nullable();
            $table->text('ndc_of_associated_covered_drug_or_biological2')->nullable();
            $table->text('ndc_of_associated_covered_drug_or_biological3')->nullable();
            $table->text('ndc_of_associated_covered_drug_or_biological4')->nullable();
            $table->text('ndc_of_associated_covered_drug_or_biological5')->nullable();
            $table->text('name_of_associated_covered_device_or_medical_supply1')->nullable();
            $table->text('name_of_associated_covered_device_or_medical_supply2')->nullable();
            $table->text('name_of_associated_covered_device_or_medical_supply3')->nullable();
            $table->text('name_of_associated_covered_device_or_medical_supply4')->nullable();
            $table->text('name_of_associated_covered_device_or_medical_supply5')->nullable();
            $table->double('program_year', 15, 8)->nullable();
            $table->timestamp('payment_publication_date')->nullable();
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
        Schema::dropIfExists('records');
    }
}
