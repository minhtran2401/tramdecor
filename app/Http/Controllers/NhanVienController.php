<?php

namespace App\Http\Controllers;
use App\NhanVien;
use Illuminate\Http\Request;

class NhanVienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ds = NhanVien::all();
        return view('admin.nhanvien.index', compact('ds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.nhanvien.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   $fileimg = $request->file('hinh_nhanvien'); // tạo biến lấy dữ liệu từ input
        $filename = $fileimg->getClientOriginalName(); // lấy tên theo tên gốc của file
        $pathimg = $fileimg->move(public_path().'/hinhnhanvien/', $filename); //chỗ chứa file
        $lt = new NhanVien([
            'hinh_nhanvien' => $filename,
            'name_nv' => $request->get('name_nv'),
            'chucvu_nv' => $request->get('chucvu_nv'),
            'Anhien' => $request->get('Anhien'),
        ]);
        $lt->save();
        return redirect ('/nhanvien')->with('success','Đã thêm nhân viên mới');
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
        $row =NhanVien::find($id);
        return view('admin.nhanvien.edit',compact('row'));
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
      $lt = NhanVien ::find($id);
      $fileimg = $request->file('hinh_nhanvien'); // tạo biến lấy dữ liệu từ input
      if ($fileimg){
        $fileimg = $request->file('hinh_nhanvien'); // tạo biến lấy dữ liệu từ input
        $filename = $fileimg->getClientOriginalName(); // lấy tên theo tên gốc của file
        $pathimg = $fileimg->move(public_path().'/hinhnhanvien/', $filename); //chỗ chứa file
      $lt->name_nv = $request->get('name_nv');
      $lt->chucvu_nv = $request->get('chucvu_nv');
      $lt->Anhien = $request->get('Anhien');
        $lt->hinh_nhanvien=$filename;
    }
      else{
        $lt->name_nv = $request->get('name_nv');
        $lt->chucvu_nv = $request->get('chucvu_nv');
        $lt->Anhien = $request->get('Anhien');}
        $lt->save();
      return redirect('/nhanvien')->with('success', 'Cập nhật thành công !');
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
