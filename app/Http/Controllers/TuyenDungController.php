<?php

namespace App\Http\Controllers;
use App\TuyenDung;
use Illuminate\Http\Request;

class TuyenDungController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ds = TuyenDung::all();
        return view('admin.tuyendung.index', compact('ds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tuyendung.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tuyendung = new TuyenDung();
        $tuyendung->name_tuyendung = $request->name_tuyendung;
        $tuyendung->noidung_tuyendung = $request->noidung_tuyendung;
        $tuyendung->Anhien = $request->Anhien;
      
        $tuyendung->save();
        return redirect('/tuyendung')->with('success', 'Thêm tin tuyển dụng thành công !');
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
        $row =TuyenDung::find($id);
        return view('admin.tuyendung.edit',compact('row'));
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
        $tuyendung = TuyenDung::find($id);
        $tuyendung->name_tuyendung = $request->name_tuyendung;
        $tuyendung->noidung_tuyendung = $request->noidung_tuyendung;
        $tuyendung->Anhien = $request->Anhien;

        $tuyendung->save();
        return redirect('/tuyendung')->with('success', 'Cập nhật thành công !');
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
