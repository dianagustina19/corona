<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $client = new Client();
        $response = $client->request('GET', 'https://api.kawalcorona.com/indonesia/provinsi');

        $responseJSON = json_decode($response->getBody(), true);

        $DKI=$responseJSON[0]['attributes'];
        $TENGAH=$responseJSON[2]['attributes'];
        $TIMUR=$responseJSON[1]['attributes'];

        $responsee = $client->request('GET', 'https://api.kawalcorona.com/indonesia');

        $indonesiaa = json_decode($responsee->getBody(), true);
        $indonesia = $indonesiaa[0];
        $positifindo = $indonesiaa[0]['positif'];
        $positifindo = str_replace(",", "", $positifindo);

        $responseee = $client->request('GET', 'https://api.kawalcorona.com/');

        $result = json_decode($responseee->getBody(), true);

        $india=$result[1]['attributes'];
        $positifindia = $result[1]['attributes']['Confirmed'];
        $sembuhindia = $result[1]['attributes']['Recovered'];

        $hasil = $positifindia - $positifindo;
        $persen = $hasil / $positifindo;
        $persen = $persen * 100;

        return view('dashboard', 
        [ 
            'all'=>$responseJSON, 
            'dki' => $DKI, 
            'tengah'=> $TENGAH, 
            'timur'=>$TIMUR, 
            'india'=>$india, 
            'indonesia'=>$indonesia,
            'hasil' =>$hasil,
            'persen' =>$persen
            ]);
    }
}
