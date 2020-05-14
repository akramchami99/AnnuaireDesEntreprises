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
    public function connect(){
        return view('pages.connect');
    }

    public function signup(){
        return view('pages.signup');
    }
    public function annuaire(){
        $entreprises = Entreprise::all();
        return view('pages.annuaire')->with('entreprises',$entreprises);
    }
}
