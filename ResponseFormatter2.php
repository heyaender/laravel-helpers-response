<?php

namespace App\Helpers;

/**
 * Format response.
 */
class ResponseFormatter
{
    // API Response Format
    protected static $response = [
        'success' => true,
        'meta' => [
            'code' => 200,
            'status' => 'success',
            'message' => null
        ]
    ];

    /**
     * Give success response.
     */
    public static function success($data = null, $message = null)
    {
        self::$response['success'] = true;
        self::$response['dataArray'] = $data;
        self::$response['meta']['message'] = $message;

        return response()->json(self::$response);
    }

    /**
     * Give error response.
     */
    public static function error($data = null, $message = null, $code = 400)
    {
        self::$response['success'] = false;
        self::$response['dataArray'] = $data;
        self::$response['meta']['status'] = 'error';
        self::$response['meta']['code'] = $code;
        self::$response['meta']['message'] = $message;

        return response()->json(self::$response);
    }
}
