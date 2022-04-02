<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WrapperApiController extends Controller
{
    public function mail()
    {
        $json = Http::get('https://api.banghasan.com/quran/format/json/surat')->json();
        return response()->json($json);
    }
    public function nomor()
    {
        $json = Http::get('https://api.banghasan.com/quran/format/json/surat/5')->json();
        return response()->json($json);
    }
    public function ayat()
    {
        $json = Http::get('https://api.banghasan.com/quran/format/json/surat/1/ayat/2')->json();
        return response()->json($json);
    }
    public function bahasa()
    {
        $json = Http::get('https://api.banghasan.com/quran/format/json/surat/3/ayat/190-193/bahasa/ar,id')->json();
        return response()->json($json);
    }
    public function daftarbahasa()
    {
        $json = Http::get('https://api.banghasan.com/quran/format/json/bahasa')->json();
        return response()->json($json);
    }
}
