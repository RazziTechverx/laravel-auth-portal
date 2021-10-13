<?php

namespace App\Helpers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class Helper
{

    /**
     * Success Response
     *
     * @param $data
     * @param $route
     * @param $sucMsg
     *
     * @return RedirectResponse
     */
    public static function SUCCESS($data, $route, $sucMsg)
    {
        $data = [
            'message'    => $sucMsg,
            'alert_type' => 'success',
            'data'       => $data
        ];

        return $route
            ? redirect()->route($route)->with($data)
            : redirect()->back()->with($data);
    }

    /**
     * Error Response
     *
     * @param $data
     * @param $route
     * @param $errMsg
     *
     * @return RedirectResponse
     */
    public static function ERROR($data, $route, $errMsg)
    {
        $data = [
            'message'    => $errMsg ?? 'Something went wrong.',
            'alert_type' => 'error',
            'data'       => $data
        ];

        return $route
            ? redirect()->route($route)->with($data)
            : redirect()->back()->with($data);
    }

    /**
     * User Request Response
     *
     * @param Request $request
     * @param         $data
     * @param string  $sucMsg|null
     * @param string|null $route
     * @param string|null $errMsg
     *
     * @return JsonResponse|RedirectResponse
     */
    public static function SEND_RESPONSE($data, string $route = null, string $sucMsg = null, string $errMsg = null)
    {
        // Send Web Response
        return $data
            ? self::SUCCESS($data, $route ?? null, $sucMsg)
            : self::ERROR($data, $route ?? null, $errMsg);
    }

    /**
     * JS Toast Message
     *
     * @param string $type
     * @param string $message
     *
     * @return string
     */
    public static function TOAST(string $type, string $message)
    {
        return sprintf("<script>toastr.%s('%s');</script>", $type, $message);
    }
}
