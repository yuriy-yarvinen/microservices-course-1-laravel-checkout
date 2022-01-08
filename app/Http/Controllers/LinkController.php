<?php

namespace App\Http\Controllers;

use App\Models\Link;
use App\Http\Resources\LinkResource;
use Symfony\Component\HttpFoundation\Response;

class LinkController
{
    public function show($code)
    {
        $link = Link::where('code', $code)->first();
        if($link){

            return new LinkResource($link);
        }
        else{
            return response(null, Response::HTTP_NO_CONTENT);
        }

    }
}