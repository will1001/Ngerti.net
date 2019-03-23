<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CRUDController extends Controller
{
    public function orderpaketinstan(Request $request)
    {
    	dd($request->get('mapel'));
    }

    public function orderpaketbulanan(Request $request)
    {
    	dd($request->get('mapel'));
    }

    public function orderpaketgroup(Request $request)
    {
    	dd($request->get('mapel'));
    }

    public function orderpaketintensif(Request $request)
    {
    	dd($request->get('mapel'));
    }
}
