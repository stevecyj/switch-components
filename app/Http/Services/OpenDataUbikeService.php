<?php
namespace App\Http\Services;

use GuzzleHttp\Client;

class OpenDataUbikeService
{
    protected $client;
    public function __construct()
    {
        $this->client = new Client();
    }
    public function getUbikeData()
    {
        // to open data api
        $response = $this->client->request(
            'GET',
            'https://datacenter.taichung.gov.tw/swagger/OpenData/9af00e84-473a-4f3d-99be-b875d8e86256',
            [
                'headers' => ['Content-Type' => 'application/json']
            ]
        );
        $contents = $response->getBody()->getContents();
        $contents = json_decode($contents);
        return $contents->retVal;
    }
}
