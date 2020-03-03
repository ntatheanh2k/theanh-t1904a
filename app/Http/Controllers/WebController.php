<?php


namespace App\Http\Controllers;

use \Illuminate\Http\Request;


class WebController
{
    public function homeGym(){
        return view('index');
    }

}
