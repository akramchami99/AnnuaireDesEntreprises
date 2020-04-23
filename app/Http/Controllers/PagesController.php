<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entreprise;

class PagesController extends Controller
{
    public function index(){
        $counts = Entreprise::count();
        return view('pages.index')->with('counts',$counts);
    }

    public function contact(){
        return view('pages.contact');
    }
}
