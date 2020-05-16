<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\Request;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function userGetSuratMasuk()
    {
        $client = new Client();
        $request = $client->get('http://localhost/suratsurat1/api/Suratmasuk');
        $response = $request->getBody();

        $surat = json_decode($response, true);
        return view('user', ['surat' => $surat]);
    }
}
