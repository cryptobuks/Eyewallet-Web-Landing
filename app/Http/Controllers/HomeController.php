<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.3/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
    {
        return view('adminlte::home');
    }

    public function news(){
        return view('welcome');
       //  $client = new \GuzzleHttp\Client();
       //  $response = $client->request('GET', 'https://newsapi.org/v2/top-headlines?country=us&apiKey=926d94b71fab47ad9b2a22b398e240e2');
       //  $response = json_decode($response->getBody()->getContents());

       // //dd($response->articles);

       //  ->with('articles',"hola yeison");
    }
}