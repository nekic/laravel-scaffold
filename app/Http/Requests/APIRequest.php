<?php

namespace App\Http\Requests;

use App\Utils\ResponseUtil;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;
use Illuminate\Support\Arr;
class APIRequest extends  FormRequest
{
    /**
     * Get the proper failed validation response for the request.
     *
     * @param array $errors
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function response(array $errors): \Symfony\Component\HttpFoundation\Response
    {
        $messages = implode(' ', Arr::flatten($errors));

        return response()->json(ResponseUtil::makeError($messages), Response::HTTP_BAD_REQUEST);
    }
}
