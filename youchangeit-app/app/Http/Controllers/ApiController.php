<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getCountries()
    {
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'https://api.countrystatecity.in/v1/countries', [
            'headers' => [
                'X-CSCAPI-KEY' => config('services.cscapi.key'),
            ],
        ]);

        return $response->getBody();
    }

    public function getStates(string $countryCode)
    {
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'https://api.countrystatecity.in/v1/countries/' . $countryCode . '/states', [
            'headers' => [
                'X-CSCAPI-KEY' => config('services.cscapi.key'),
            ],
        ]);

        return $response->getBody();
    }

    public function getCities(string $countryCode, string $stateRegionCode)
    {
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'https://api.countrystatecity.in/v1/countries/' . $countryCode . '/states/' . $stateRegionCode . '/cities', [
            'headers' => [
                'X-CSCAPI-KEY' => config('services.cscapi.key'),
            ],
        ]);

        return $response->getBody();
    }

}
