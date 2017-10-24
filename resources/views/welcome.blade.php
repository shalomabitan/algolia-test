<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">


        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    </head>
    <body>
        <div class="content container">
            <div id="app" class="row">
                
            <ais-index app-id="{{ config('scout.algolia.id') }}"
                api-key="{{ env('ALGOLIA_SEARCH') }}"
                index-name="records">
                <div class="lead"> Begin typing to see the best results for 2015 General Data Set <button class="btn btn-primary pull-right" v-on:click="exportxls">Export Results</button>
</div>
                <div class="input-group">
                  <ais-input placeholder="Search records..." class="form-control" aria-describedby="basic-addon1"></ais-input>
                  <span class="input-group-addon" id="basic-addon2">Search</span>
                </div>

              <ais-results inline-template class="col-xs-8 col-xs-offset-2 results">
                  <table class="table-striped">
                    <tbody>
                      <tr v-for="result in results">
                        <td class="object-id-number hide" v-html="result.id"></td>
                        <td>
                            <h4 class="result-title">Dr. @{{ result.physician_first_name | lowercase | capitalize  }} @{{ result.physician_middle_name | lowercase | capitalize }} @{{ result.physician_last_name | lowercase | capitalize }} </h4>
                            <h5>@{{ result.submitting_applicable_manufacturer_or_applicable_gpo_name }}</h5>
                            <address>
                                @{{ result.recipient_primary_business_street_address_line1 }}

                                <span v-if="result.recipient_primary_business_street_address_line2 ">
                                    <br />@{{ result.recipient_primary_business_street_address_line2 }}
                                </span>

                                <span v-if="result.recipient_city ">
                                    <br /> @{{ result.recipient_city }},
                                </span>

                                <span v-if="result.recipient_state ">
                                    @{{ result.recipient_state }}
                                </span>

                                <span v-if="result.recipient_zip_code ">
                                    @{{ result.recipient_zip_code }}
                                </span>
                            </address>
                        </td>
                        <td><ul class="list-unstyled">
                           <li><strong>Record ID:</strong> @{{ result.record_id }}</li>
                           <li><strong>Cost:</strong> @{{ result.total_amount_of_payment_usdollars | currency }}</li>
                           <li><strong>Specialty:</strong> @{{ result.physician_specialty | truncate(25) }}</li>
                           <li><strong>Drugs:</strong> @{{result.name_of_associated_covered_drug_or_biological1 }}
                            <span v-if="result.name_of_associated_covered_drug_or_biological2 ">
                                , @{{result.name_of_associated_covered_drug_or_biological2 }}
                            </span>
                            <span v-if="result.name_of_associated_covered_drug_or_biological3 ">
                                , @{{result.name_of_associated_covered_drug_or_biological3 }}
                            </span>
                            <span v-if="result.name_of_associated_covered_drug_or_biological4 ">
                                , @{{result.name_of_associated_covered_drug_or_biological4 }}
                            </span>
                            <span v-if="result.name_of_associated_covered_drug_or_biological5 ">
                                , @{{result.name_of_associated_covered_drug_or_biological5 }}
                            </span>
                        </ul></td>
                    </tr>
                </tbody>
            </table>
        </ais-results>

            </ais-index>

            </div>
        </div>

     <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
