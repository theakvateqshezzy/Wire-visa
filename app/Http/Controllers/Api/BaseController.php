<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;

class BaseController extends Controller
{ 
    public function sendResponse($message, $result = [], $meta = [])
    {
        $response = [
            'success' => true,
            'message' => $message,
            'data'    => $result,
        ];

        $meta ? $response['meta'] = $meta : '';
        return response()->json($response, 200);
    }

    public function sendError($error, $errorMessages = [], $code = 400)
    {
        $response = [
            'success' => false,
            'message' => $error,
        ];

        if(!empty($errorMessages)){
            $response['data'] = $errorMessages;
        }        
        
        return response()->json($response, $code);
    }

    public function errorLog($message)
    {
        Log::info($message);
    }
    
}