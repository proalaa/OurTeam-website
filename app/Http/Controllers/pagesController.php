<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function index()
    {
        $date = array(
            'title'=>'Home',
            'info'=>'WE ARE CREATIVE AGENCY'
        );
    
        return view('pages.index')->with('date' ,$date);
    }
    public function about()
    {
        $date = array(
            'title'=>'About',
            'info'=>'About'
        );
    
        return view('pages.About')->with('date' ,$date);
    }
    public function services()
    {
        $date = array(
            'title'=>'Services',
            'info'=>'Services'
        );
    
        return view('pages.services')->with('date' ,$date);
    }
    public function portfolio()
    {
        $date = array(
            'title'=>'Portfolio',
            'info'=>'Portfolio'
        );
    
        return view('pages.portfolio')->with('date' ,$date);
    }
    public function contact()
    {
        $date = array(
            'title'=>'Contact',
            'info'=>'Contact'
        );
    
        return view('pages.contact')->with('date' ,$date);
    }
    
}
