<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GempaController extends Controller
{
    public function getGempa()
    {
        $data = Http::get("https://cuaca-gempa-rest-api.vercel.app/quake")->object();
        return response()->json([
            'code' => 200,
            'status' => true,
            'message' => "Success get gempa",
            'data' => $data
        ]);
    }
    public function getProvinsi($provinsi)
    {
        $data = Http::get("https://cuaca-gempa-rest-api.vercel.app/weather/" . $provinsi)->object();
        return response()->json([
            'code' => 200,
            'status' => true,
            'message' => "Success get Cuaca Provinsi " . $provinsi,
            'data' => $data
        ]);
    }
    public function getKota($provinsi, $kota)
    {
        $data = Http::get("https://cuaca-gempa-rest-api.vercel.app/weather/" . $provinsi . "/" . $kota)->object();
        return response()->json([
            'code' => 200,
            'status' => true,
            'message' => "Success get Cuaca Kota " . $kota,
            'data' => $data
        ]);
    }
}
