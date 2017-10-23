<?php 

namespace App\Services\CMS;

use DB;
use Log;

class Client {

    /**
     * The function will retreive json from the data endpoint 
     * we want and store the latest database in the records 
     * and sync with algolia. Note that to speed things up, 
     * we should have this set to the correct queue mechanisim. 
     * 
     * @return void
     */
    public function getData()
    {

        try {

            $client = new \GuzzleHttp\Client();

            $response = $client->get('https://openpaymentsdata.cms.gov/resource/sqj3-uhcd.json');

            $body = $response->getBody();

            $records = collect(json_decode((string)$body, true));

        } catch (GuzzleHttp\Exception\RequestException $e) {

            Log::error(__METHOD__ . ' Failed', [
                'response' => $e->getResponseBodySummary(),
                'exception' => [$e],
            ]);

            return;

        } catch (GuzzleHttp\Exception\ClientException $e) {
            Log::error(__METHOD__ . ' Failed', [
                'response' => $e->getResponseBodySummary(),
                'exception' => [$e],
            ]);

            return;
        }
        
        //drop the table so we have the latest info
        DB::table('records')->truncate();

        //for each record, insert into the database
        foreach($records as $record) {

            $record = new \App\Record($record);

            $record->save();

        }
    }

}
