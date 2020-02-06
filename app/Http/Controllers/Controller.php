<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Storage;

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

    protected function saveImgBase64($param, $folder)
    {
        list($extension, $content) = explode(';', $param);
        $tmpExtension = explode('/', $extension);
        preg_match('/.([0-9]+) /', microtime(), $m);
        $fileName = sprintf('img%s%s.%s', date('YmdHis'), $m[1], $tmpExtension[1]);
        $content = explode(',', $content)[1];
        $storage = Storage::disk('public');

        $checkDirectory = $storage->exists($folder);

        if (!$checkDirectory) {
            $storage->makeDirectory($folder);
        }

        $storage->put($folder . '/' . $fileName, base64_decode($content), 'public');

        return $fileName;
    }

    public static function getToTalCategory()
    {
        return Category::all()->count();
    }

    public static function getToTalPost()
    {
        return Post::all()->count();
    }
}
