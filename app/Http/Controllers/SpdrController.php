<?php

namespace App\Http\Controllers;

use App\Helpers\EtfParser;
use GuzzleHttp\Client;
use Psr\Http\Message\ResponseInterface;

class SpdrController extends Controller
{
    public function download() {
        $response = (new Client())->get(env('SPDR_RESOURCE_URL'));
        if($this->isResponseSuccessful($response)) {
            return (new EtfParser($response->getBody()))->process();
        }
    }

    private function isResponseSuccessful(ResponseInterface $response) {
        return ($response->getStatusCode() === 200);
    }
}
