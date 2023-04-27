<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TheloaiTruyen;
use App\Models\Truyen;
use App\Models\Chuong;

class IndexController extends Controller
{
    public function home() {
        $theloai = TheloaiTruyen::orderBy('id','DESC')->get();
        $truyen = Truyen::orderBy('id','DESC')->where('kichhoat', 0)->get();
        $truyen_hay = Truyen::orderBy('luotxem', 'DESC')->where('kichhoat', 0)->get();
        return view('pages.home')->with(compact('theloai', 'truyen', 'truyen_hay'));
    }
    public function theloai($slug) {
        $theloai = TheloaiTruyen::orderBy('id','DESC')->get();
        $theloai_id = TheloaiTruyen::where('slug_theloai', $slug)->first();
        $tentheloai = $theloai_id->tentheloai;
        $truyen = Truyen::orderBy('id','DESC')->where('kichhoat', 0)->where('theloai_id', $theloai_id->id)->get();
        return view('pages.theloai')->with(compact('theloai', 'truyen', 'tentheloai'));
    }
    public function xemtruyen($slug) {
        $theloai = TheloaiTruyen::orderBy('id','DESC')->get();
        $truyen = Truyen::with('theloaitruyen')->where('slug_truyen', $slug)->where('kichhoat', 0)->first();
        $chuong = Chuong::with('truyen')->orderBy('id', 'ASC')->where('truyen_id', $truyen->id)->get();
        $truyen_hay = Truyen::orderBy('luotxem', 'DESC')->where('kichhoat', 0)->get();
        $chuong_dau = Chuong::with('truyen')->orderBy('id', 'ASC')->where('truyen_id', $truyen->id)->first();
        $cungtheloai = Truyen::with('theloaitruyen')->where('theloai_id',$truyen->theloaitruyen->id)->whereNotIn('id',[$truyen->id])->get();
        return view('pages.truyen')->with(compact('theloai', 'truyen', 'chuong', 'cungtheloai', 'chuong_dau', 'truyen_hay'));
    }
    public function xemchuong($slug){
        $theloai = TheloaiTruyen::orderBy('id','DESC')->get();
        $truyen = Chuong::where('slug_chuong',$slug)->first();
        $chuong = Chuong::with('truyen')->where('slug_chuong', $slug)->where('truyen_id', $truyen->truyen_id)->first();
        $all_chuong = Chuong::with('truyen')->orderBy('id','ASC')->where('truyen_id', $truyen->truyen_id)->get();
        return view('pages.chuong')->with(compact('theloai', 'chuong', 'all_chuong'));
    }
}
