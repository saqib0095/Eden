<?php

namespace App\Services;

use Exception;
use Illuminate\Support\Facades\Http;

class CustomersService
{
    public function getCustomers()
    {
        $url = 'https://eve.edenpetfoods.com/api/customers';
        $ch = curl_init();
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        $headers = ['Accept:application/json','Authorization:8cb84913788e037ba09ddeecfc4de9cffa4352cfcc30c7ad3612040ffa63d6e3'];
        curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
        curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,0);
        curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,0);
        curl_setopt($ch,CURLOPT_URL,$url);
        $response = curl_exec($ch);
        if($response !== null)
        {
            $response = json_decode($response,true);
            if(json_last_error() === JSON_ERROR_NONE){
                return $response["Response"];
            }elseif($response["Ack"] === "Failure" && $response["Status"] == 401){
                return throw new Exception(JSON_THROW_ON_ERROR);
            }
        }
    }
}