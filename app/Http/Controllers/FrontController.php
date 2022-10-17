<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    //首頁回傳 開啟首頁
    public function index(){
        return view('frontend.bs.index');
    }

    // weather
    public function w(){
        return view('frontend.bs.index');
    }
    // 新聞內頁
    public function bb(){
        return view('frontend.bs.index');
    }
}
