<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Contracts\Validation\Validator;


abstract class Controller extends BaseController
{
    use DispatchesJobs, ValidatesRequests;

    protected function formatValidationErrors(Validator $validator)
    {
        //parent::formatValidationErrors($validator);
        //return $validator->errors()->all();
        $errors = $validator->errors()->all();
        $result = array();

        foreach ($errors as $error) {
            $result[] = //strlen(
            strtoupper($error);
        }

        return $result;

    }

}
