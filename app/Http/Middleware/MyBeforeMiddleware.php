<?php
/**
 * Created by PhpStorm.
 * User: hirayamatakaaki
 * Date: 2018/04/29
 * Time: 13:22
 */

namespace App\Http\Middleware;

use Closure;

class MyBeforeMiddleware
{

    public function handle(\Illuminate\Http\Request $request, Closure $next)
    {
        if ($request->getPathInfo() != '/post') {
            return $next($request);
        }

        if(!empty($_SERVER['CONTENT_LENGTH']) &&
            $_SERVER['CONTENT_LENGTH'] > self::returnBytes(ini_get('post_max_size'))) {//$_SERVER['CONTENT_LENGTH']とphp.iniに登録されているpost_max_sizeの値を比較
            $validator = \Validator::make([],[]);
            $validator->getMessageBag()->add('upload_error', 'ファイルサイズがpost_max_sizeを超過しているよ');//_SERVER['CONTENT_LENGTH']が超過していた場合には、バリデートのエラーメッセージを登録

            return redirect('post/create')->withErrors($validator);//リダイレクトして、エラーメッセージ表示
        }

        /*
        if (!$request->has('file')) {
            return $next($request);
        }
        */

        if ($_FILES['file']['error'] == UPLOAD_ERR_INI_SIZE) {
            $validator = \Validator::make([],[]);
            $validator->getMessageBag()->add('upload_error', 'ファイルサイズがupload_max_filesizeを超過しているよ');//_SERVER['CONTENT_LENGTH']が超過していた場合には、バリデートのエラーメッセージを登録

            return redirect('post/create')->withErrors($validator);//リダイレクトして、エラーメッセージ表示
        }
//$_FILES['file'][0]
 //       if (UPLOAD_ERR_NO_FILE)
        //$_FILES['file']


        $response = $next($request);
        return $response;
    }

    private static function returnBytes($val) {
        $val = trim($val);
        $last = strtolower($val[strlen($val)-1]);
        switch($last) {
            // 'G' は PHP 5.1.0 以降で使用可能です
            case 'g':
                $val *= 1024;
            case 'm':
                $val *= 1024;
            case 'k':
                $val *= 1024;
        }

        return $val;
    }

}