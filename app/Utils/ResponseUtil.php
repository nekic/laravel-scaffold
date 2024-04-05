<?php

namespace App\Utils;

class ResponseUtil
{
    public static function makeResponse(string $message, mixed $data): array
    {
        return [
            'success' => true,
            'code'    => 0,
            'data'    => $data,
            'message' => $message,
        ];
    }

    public static function makeError(string $message, array $data = []): array
    {
        $res = [
            'success' => false,
            'code'    => 1,  // 'code' => 1,  // 'code' => 404,  // 'code' => 500,  // 'code' => 403,  // 'code' => 401,  // 'code' => 400,  // 'code' => 200,  // 'code' => 201,  // 'code' => 204,  // 'code' => 304,  // 'code' => 302,  // 'code' => 301
            'message' => $message,
        ];

        if (!empty($data)) {
            $res['data'] = $data;
        }

        return $res;
    }
}
