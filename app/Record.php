<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Record extends Model
{
    use Searchable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'change_type',
        'covered_recipient_type',
        'teaching_hospital_ccn',
        'teaching_hospital_id',
        'teaching_hospital_name',
        'physician_profile_id',
        'physician_first_name',
        'physician_middle_name',
        'physician_last_name',
        'physician_name_suffix',
        'recipient_primary_business_street_address_line1',
        'recipient_primary_business_street_address_line2',
        'recipient_city',
        'recipient_state',
        'recipient_zip_code',
        'recipient_country',
        'recipient_province',
        'recipient_postal_code',
        'physician_primary_type',
        'physician_specialty',
        'physician_license_state_code1',
        'physician_license_state_code2',
        'physician_license_state_code3',
        'physician_license_state_code4',
        'physician_license_state_code5',
        'submitting_applicable_manufacturer_or_applicable_gpo_name',
        'applicable_manufacturer_or_applicable_gpo_making_payment_id',
        'applicable_manufacturer_or_applicable_gpo_making_payment_name',
        'applicable_manufacturer_or_applicable_gpo_making_payment_state',
        'applicable_manufacturer_or_applicable_gpo_making_payment_country',
        'total_amount_of_payment_usdollars',
        'date_of_payment',
        'number_of_payments_included_in_total_amount',
        'form_of_payment_or_transfer_of_value',
        'nature_of_payment_or_transfer_of_value',
        'city_of_travel',
        'state_of_travel',
        'country_of_travel',
        'physician_ownership_indicator',
        'third_party_payment_recipient_indicator',
        'name_of_third_party_entity_receiving_payment_or_transfer_of_value',
        'charity_indicator',
        'third_party_equals_covered_recipient_indicator',
        'contextual_information',
        'delay_in_publication_indicator',
        'record_id',
        'dispute_status_for_publication',
        'product_indicator',
        'name_of_associated_covered_drug_or_biological1',
        'name_of_associated_covered_drug_or_biological2',
        'name_of_associated_covered_drug_or_biological3',
        'name_of_associated_covered_drug_or_biological4',
        'name_of_associated_covered_drug_or_biological5',
        'ndc_of_associated_covered_drug_or_biological1',
        'ndc_of_associated_covered_drug_or_biological2',
        'ndc_of_associated_covered_drug_or_biological3',
        'ndc_of_associated_covered_drug_or_biological4',
        'ndc_of_associated_covered_drug_or_biological5',
        'name_of_associated_covered_device_or_medical_supply1',
        'name_of_associated_covered_device_or_medical_supply2',
        'name_of_associated_covered_device_or_medical_supply3',
        'name_of_associated_covered_device_or_medical_supply4',
        'name_of_associated_covered_device_or_medical_supply5',
        'program_year',
        'payment_publication_date',
    ];
}
