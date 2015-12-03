<?php
/**
 * Author: Xavier Au
 * Date: 3/12/15
 * Time: 4:39 PM
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class ApisController extends Controller
{
    public function fetchLists(Request $request)
    {
        $allowedOrigins = [
            "http://anacreation.dev"
        ];
        $headers = [
            'Access-Control-Allow-Origin' => $request->headers->get('ORIGIN'),
            'Access-Control-Allow-Headers'=> 'Content-Type, X-Auth-Token, Origin',
            'Access-Control-Allow-Methods'=>'GET'
        ];
        return response('successful', 200, $headers);

    }
}