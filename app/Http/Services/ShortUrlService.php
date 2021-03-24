<?php
namespace App\Http\Services;

use GuzzleHttp\Client;

class ShortUrlService
{
    protected $client;
    // 建構子
    public function __construct()
    {
        $this->client = new Client();
    }
    public function makeShortUrl($url)
    {
        $accesstoken = env('SHORTURL_ACCESS_TOKEN');
        // $accesstoken = "20f07f91f3303b2f66ab6f61698d977d69b83d64";
        $data = [
        'url' => $url
        ];

        $response = $this->client->request(
            'POST',
            "https://api.pics.ee/v1/links/?access_token=$accesstoken",
            [
              'headers' =>['Content-Type' => 'application/json'],
              'body' => json_encode($data),
            ]
        );

        $contents = $response->getBody()->getContents();
        $contents =  json_decode($contents);
        return $contents->data->picseeUrl;
    }
}
