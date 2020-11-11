<?php

namespace App\Http\Controllers;

class HealthController extends Controller
{
    /**
     * Retrieve the user for the given ID.
     *
     * @param  int  $id
     * @return Response
     */
    public function getAction()
    {
        return  response()->json(['name'=>'cassio','state'=>'CA']);
    }
}