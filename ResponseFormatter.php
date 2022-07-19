<?php

namespace App\Helpers;

/**
 * Format response.
 */
class ResponseFormatter
{
    /**
     * API Response
     *
     * @var array
     */
    // protected static $response = [
    //     'meta' => [
    //         'code' => 200,
    //         'status' => 'success',
    //         'message' => null,
    //     ],
    //     'data' => null,
    // ];

    protected static $response = [
        'success' => true,
    ];

    /**
     * Give success response.
     */
    public static function success($data = null)
    {
        self::$response['success'] = true;
        self::$response['dataArray'] = $data;

        return response()->json(self::$response);
    }

    /**
     * Give error response.
     */
    public static function error($data = null)
    {
        self::$response['success'] = false;
        self::$response['dataArray'] = $data;

        return response()->json(self::$response);
    }
}
