<?php

namespace App\Services;

use GuzzleHttp\Promise\PromiseInterface;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;

class HttpConnectionService
{
    /**
     * @param $domain
     * @param $endPoint
     * @return Response
     */
    public function apiCallGet($domain, $endPoint)
    {
        $route = $domain.$endPoint;
//        $response = Http::get($route);
        return Http::accept('application/json')->withHeaders([
            'content-type' => 'application/json'
        ])->get($route);
    }

    /**
     * @param $domain
     * @param $endPoint
     * @return Response
     */
    public function apiCallDelete($domain, $endPoint)
    {
        $route = $domain.$endPoint;
        return Http::delete($route);
    }

    /**
     * @param $domain
     * @param $endPoint
     * @param array $parameters
     * @param false $header
     * @return PromiseInterface|Response
     */
    public function apiCallPost($domain, $endPoint, $parameters=[], $header=false)
    {
        $route = $domain.$endPoint;
        if ($header) {
            return Http::withHeaders([
                'Authorization' => 'Bearer '.session('token'),
            ])->post($route, $parameters);
        }
        return Http::post($route, $parameters);
    }

    /**
     * @param $domain
     * @param $endPoint
     * @param $user_array
     * @return Response
     */
    public function apiCallPut($domain, $endPoint, $user_array)
    {
        $route = $domain.$endPoint;
        return Http::put($route, $user_array);
    }
}
