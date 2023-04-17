<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DanhmucTruyen;
use App\Models\Truyen;
class TruyenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admincp.truyen.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $danhmuc = DanhmucTruyen::orderBy('id', 'DESC')->get();
        return view('admincp.truyen.create')->with(compact('danhmuc'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate(
            [
                'tentruyen' => 'required|unique:truyen|max:255',
                'slug_truyen' => 'required|unique:truyen|max:255',
                'tomtat' => 'required',
                'danhmuc' => 'required',
                'kichhoat' => 'required',
                'hinhanh' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000',
            ],
            [
                'tentruyen.required' => 'Vui lòng nhập tên truyện',
                'tentruyen.unique' => 'Tên truyện đã tồn tại vui lòng điền tên khác',
                'slug_truyen.required' => 'Vui lòng nhập slug truyện',
                'slug_truyen.unique' => 'Slug truyện đã tồn tại vui lòng điền slug khác',
                'tomtat.required' => 'Vui lòng nhập tóm tắt truyện',
                'hinhanh.required' => 'Vui lòng thêm hình ảnh',
                'hinhanh.image' => 'File tải lên không phải là hình ảnh',
                'hinhanh.mimes' => 'Chỉ chấp nhận file hình ảnh định dạng: jpg, png, jpeg, gif, svg',
                'hinhanh.dimensions' => 'Kích thước hình ảnh không hợp lệ',
            ]
        );
        // $data = $request->all();
        $truyen = new Truyen();
        $truyen->tentruyen = $data['tentruyen'];
        $truyen->slug_truyen = $data['slug_truyen'];
        $truyen->kichhoat = $data['kichhoat'];
        $truyen->danhmuc_id = $data['danhmuc'];
        $truyen->tomtat = $data['tomtat'];
        $get_image = $request->hinhanh;
        $path = 'public/uploads/truyen/';
        $get_name_image = $get_image->getClientOriginalName();
        $name_image = current(explode('.', $get_name_image));
        $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
        $get_image->move(public_path($path), $new_image);
        $truyen->hinhanh = $new_image;
        $truyen->save();
        return redirect()->back()->with('status','Thêm truyện thành công');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admincp.truyen.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
