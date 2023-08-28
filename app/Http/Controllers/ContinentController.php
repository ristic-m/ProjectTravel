<?php

namespace App\Http\Controllers;

use App\Models\Continent;
use App\Models\Package;
use Illuminate\Http\Request;

class ContinentController extends Controller
{
    public function showEurope()
    {
        $continent = Continent::find(1);
        $destinations = $continent->destinations;
        return view('continents.europe', compact('destinations'));
    }

    public function showAsia()
    {
        $continent = Continent::find(2);
        $destinations = $continent->destinations;
        return view('continents.asia', compact('destinations'));
    }

    public function showAfrica()
    {
        $continent = Continent::find(3);
        $destinations = $continent->destinations;
        return view('continents.africa', compact('destinations'));
    }

    public function showSouthAmerica()
    {
        $continent = Continent::find(4);
        $destinations = $continent->destinations;
        return view('continents.southamerica', compact('destinations'));
    }

}
