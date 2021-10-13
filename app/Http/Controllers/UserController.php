<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * @var UserService
     */
    private $_userService;

    public function __construct()
    {
        $this->_userService = new UserService();
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function register(Request $request)
    {
        return $this->_userService->register($request);
    }

    /**
     * @param $token
     * @return JsonResponse|RedirectResponse
     */
    public function verify($token)
    {
        return $this->_userService->verify($token);
    }

    /**
     * @return RedirectResponse
     */
    public function logout()
    {
        return $this->_userService->logout();
    }

    /**
     * @param Request $request
     * @return JsonResponse|RedirectResponse
     */
    public function resetEmail(Request $request)
    {
        return $this->_userService->resetEmail($request);
    }
}
