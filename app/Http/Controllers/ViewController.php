<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\mapel;
use App\jam_kursus;

class ViewController extends Controller
{
    public function index()
    {
    	return view('index/index');
    }



    public function paketinstan()
    {
        $mapels=mapel::all();
        $jam_kursuss=jam_kursus::all();
    	return view('sectionpaket/paketinstan',['mapels' => $mapels,'jam_kursuss' => $jam_kursuss]);
    }


    public function paketbulanan()
    {
    	return view('sectionpaket/paketbulanan');
    }


    public function paketgroup()
    {
    	return view('sectionpaket/paketgroup');
    }


    public function paketintensif()
    {
    	return view('sectionpaket/paketintensif');
    }
}
