<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\Request;

class SuratController extends Controller
{
    public function index()
    {
        $client = new Client();
        $request = $client->get('http://localhost/suratsurat1/api/Suratmasuk');
        $response = $request->getBody();

        $surat = json_decode($response, true);
        return view('user', ['surat' => $surat]);
    }

    public function detailSurat($id)
    {
        $client = new Client();
        $request = $client->get('http://localhost/suratsurat1/api/Suratmasuk?kode_surat=' . $id);
        $response = $request->getBody();
        $surat['surat'] = json_decode($response, true);

        return view('detailSurat', ['surat' => $surat]);
    }
    public function userDeleteSurat($id)
    {
        $client = new \GuzzleHttp\Client();
        $client->delete('http://localhost/suratsurat1/api/Suratmasuk', [
            'form_params' => [
                'kode_surat' => $id
            ]
        ]);

        return redirect('/surat')->with(['error' => 'Data Berhasil Dihapus']);
    }
}
