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
        if( $request->headers->has('ORIGIN') and in_array($request->headers->get('ORIGIN'), $allowedOrigins)){
            $headers = [
                'Access-Control-Allow-Origin' => $request->headers->get('ORIGIN'),
                'Content-type'=>"text/plain"
            ];
            return response('successful', 200, $headers);
        } ;

    }
}