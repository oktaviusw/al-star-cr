<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $data = array(
            'title' => 'Welcome to XXX',
        );

        return view('pages/home')->with($data); 
    }

    public function about()
    {
        $data = array(
            'title' => 'About XXX',
        );

        return view('pages/about')->with($data);
    }

    public function services()
    {
        $data = array(
            'title' => 'XXX Services',
        );

        return view('pages/services')->with($data);
    }
}
