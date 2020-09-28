<?php

namespace App\Http\Controllers;
use App\DanhGia;
use Illuminate\Http\Request;

class DanhGiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ds = DanhGia::all();
        return view('admin.danhgia.index', compact('ds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.danhgia.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
        $lt = new DanhGia([
            'nguoi_danhgia' => $request->get('nguoi_danhgia'),
            'duan_danhgia' => $request->get('duan_danhgia'),
            'noidung_danhgia' => $request->get('noidung_danhgia'),
            'Anhien' => $request->get('Anhien'),
        ]);
        $lt->save();
        return redirect ('/danhgia')->with('success','Đã thêm đánh giá mới');
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
        $row =DanhGia::find($id);
        return view('admin.danhgia.edit',compact('row'));
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
        $lt = DanhGia ::find($id);

        
        $lt->nguoi_danhgia = $request->get('nguoi_danhgia');
        $lt->duan_danhgia = $request->get('duan_danhgia');
        $lt->noidung_danhgia = $request->get('noidung_danhgia');

        $lt->Anhien = $request->get('Anhien');
       
          $lt->save();
        return redirect('/danhgia')->with('success', 'Cập nhật thành công !');
        }
        
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lt = DanhGia::find($id);
       
            $lt->delete();
            return redirect('/danhgia')->with('success', 'Đã xóa xong đánh giá vừa chọn');
       
    }
}
