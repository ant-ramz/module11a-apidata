<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

class WeatherController extends Controller
{
    public function index()
    {
        //gets json file from storage
        $json = Storage::get('weather2.json');

        //converts json to php array
        $weather = json_decode($json, true);
        
        return view('weather.index', ['weather' => $weather]);
    }
}