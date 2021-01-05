<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;


class HomeController extends Controller
{
    public function index(){

        $response =  Http::withOptions([
            'verify' => false,
        ])->get('https://api.github.com/users/imnotvirus');

        $github = json_decode($response);


        return view('home', compact('github'));
    }

}
