<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $keyword        = $request->input('keyword');
        $state          = $request->input('state');
        $dari_tanggal   = $request->input('dari_tanggal');
        $sampai_tanggal = $request->input('sampai_tanggal');

        $client = new Client();
        $response = $client->request('GET', 'https://api.kawalcorona.com/indonesia/provinsi');

        $responseJSON = json_decode($response->getBody(), true);
        $all=$responseJSON;
        $DKI=$responseJSON[0]['attributes'];
        $TENGAH=$responseJSON[2]['attributes'];
        $TIMUR=$responseJSON[1]['attributes'];

        return view('dashboard', [ 'all'=>$responseJSON,'dki' => $DKI,'tengah'=> $TENGAH, 'timur'=>$TIMUR]);
    }
}
