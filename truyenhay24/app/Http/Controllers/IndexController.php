<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TheloaiTruyen;
use App\Models\Truyen;

class IndexController extends Controller
{
    public function home() {
        $theloai = TheloaiTruyen::orderBy('id','DESC')->get();
        $truyen = Truyen::orderBy('id','DESC')->where('kichhoat', 0)->get();
        return view('pages.home')->with(compact('theloai', 'truyen'));
    }
    public function theloai($slug) {
        return view('pages.truyen');
    }
    public function xemtruyen() {
        $theloai = TheloaiTruyen::orderBy('id','DESC')->get();
        return view('pages.truyen')->with(compact('theloai'));;
    }
}
