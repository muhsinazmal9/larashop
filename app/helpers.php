<?php 

if (! function_exists('success')) {
    function success($message = null, $data = null, $code = 200)
    {
        return response()->json([
            'success' => true,
            'data' => $data,
            'message' => $message,
            'code' => $code
        ]);
    }
}

if (! function_exists('error')) {
    function error($message = null, $data = null, $code = 500)
    {
        return response()->json([
            'success' => false,
            'data' => $data,
            'message' => $message,
            'code' => $code
        ]);
    }
}



?>