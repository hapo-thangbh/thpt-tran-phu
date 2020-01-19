<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function successResponse($data, $msg)
    {
        return response()->json([
           'status'    => true,
           'data'   => $data,
           'msg'    => $msg
        ]);
    }

    public function errorResponse($msg)
    {
        return response()->json([
           'status' => false,
           'data'   => [],
           'msg'    => $msg
        ]);
    }
}
