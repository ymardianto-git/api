<?php

namespace App\Exceptions;

use Symfony\Component\HttpFoundation\Response;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

trait ExceptionTrait
{
    
    public function apiException($request, $e){
        if($e instanceof ModelNotFoundException){
            return response()->json(['error'=>'Model not found'], Response::HTTP_NOT_FOUND);
        }
        
        if($e instanceof NotFoundHttpException){
            return response()->json(['error'=>'URL is not valid'], Response::HTTP_NOT_FOUND);
        }
    }
}


