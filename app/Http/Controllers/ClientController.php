<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index() {
        return view('index');
    }

    public function tarifications() {
        // Récupérer l'adresse IP de l'utilisateur
        $ip = $_SERVER['REMOTE_ADDR'];

        // Récupérer la localisation de l'adresse IP
        $location = json_decode(file_get_contents('http://www.geoplugin.net/json.gp?ip=' . $ip));

        // Vérifier si l'utilisateur est en dehors de l'Afrique
        if (isset($location->geoplugin_continentCode) && $location->geoplugin_continentCode == 'AF') {
            $continent_code = $location->geoplugin_continentCode;
        }else{
            $continent_code = '';
        }
        return view('tarifications', compact('continent_code'));
    }

    public function contact() {
        return view('contact');
    }
}
