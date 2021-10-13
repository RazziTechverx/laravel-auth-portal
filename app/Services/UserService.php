<?php

namespace App\Services;

use App\Helpers\Helper;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class UserService
{
    /**
     * @var HttpConnectionService
     */
    private $_httpConnectionService;

    public function __construct()
    {
        $this->_httpConnectionService = new HttpConnectionService();
    }

    /**
     * @param Request $request
     * @return JsonResponse|RedirectResponse
     */
    public function register(Request $request)
    {
        $response = $this->_httpConnectionService->apiCallPost(env('API_URL'), 'register', ['email' => $request->email]);
        $response = json_decode($response, true);
        if ($response['status'] != 'ERROR') {
            return Helper::SEND_RESPONSE($response, 'login', $response['message']);
        }
        return Helper::ERROR($response, 'login', $response['message']);
    }

    /**
     * @param $token
     * @return JsonResponse|RedirectResponse
     */
    public function verify($token)
    {
        $response = $this->_httpConnectionService->apiCallGet(env('API_URL'), 'verify/'.$token);
        $response = json_decode($response, true);
        if ($response['status'] != 'ERROR' && !empty($response['data'])) {
            session(['token' => $response['data']['token'] ]);
            return Helper::SEND_RESPONSE($response['data'], 'home');
        }
        return Helper::SEND_RESPONSE(null, 'login', null, $response['message']);
    }

    /**
     * @return RedirectResponse
     */
    public function logout()
    {
        $response = $this->_httpConnectionService->apiCallPost(env('API_URL'), 'logout', [], true);
        $response = json_decode($response, true);
        if ($response['status'] == 'SUCCESS') {
            session()->forget('token');
            session()->save();
            return redirect()->route('login');
        } else {
            return redirect()->back();
        }
    }

    /**
     * @param Request $request
     * @return JsonResponse|RedirectResponse
     */
    public function resetEmail(Request $request)
    {
        $response = $this->_httpConnectionService->apiCallPost(env('API_URL'), 'reset-email', ['email' => $request->email], true);
        $response = json_decode($response, true);
        if ($response['status'] == 'SUCCESS') {
            return Helper::SEND_RESPONSE($response, null, $response['message']);
        }
        return Helper::SEND_RESPONSE(null, null, null, $response['message']);
    }
}
