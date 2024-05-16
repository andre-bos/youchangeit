<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getCountries()
    {
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'https://wft-geo-db.p.rapidapi.com/v1/geo/countries', [
            'headers' => [
                'X-RapidAPI-Key' => config('services.rapidapi.key'),
                'X-RapidAPI-Host' => config('services.rapidapi.host'),
            ],

            'query' => [
                'limit' => '100'
            ]
        ]);

        return $response->getBody();
    }

    public function getStates(string $countryCode)
    {
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'https://wft-geo-db.p.rapidapi.com/v1/geo/countries/' . $countryCode . '/regions', [
            'headers' => [
                'X-RapidAPI-Key' => config('services.rapidapi.key'),
                'X-RapidAPI-Host' => config('services.rapidapi.host'),
            ],

            'query' => [
                'limit' => '100',
            ],
        ]);

        return $response->getBody();
    }

    public function getCities(string $countryCode, $stateRegionCode)
    {
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'https://wft-geo-db.p.rapidapi.com/v1/geo/countries/' . $countryCode . '/regions/' . $stateRegionCode . '/cities', [
            'headers' => [
                'X-RapidAPI-Key' => config('services.rapidapi.key'),
                'X-RapidAPI-Host' => config('services.rapidapi.host'),
            ],

            'query' => [
                'limit' => '100',
            ],
        ]);

        return $response->getBody();
    }

}
