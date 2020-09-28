<?php

namespace App\Http\Controllers;
use App\LoaiBlog;

use Illuminate\Http\Request;

class LoaiBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ds = LoaiBlog::all();
        return view('admin.loaiblog.index', compact('ds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.loaiblog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        $lt = new LoaiBlog([
           
            'name_loaiblog' => $request->get('name_loaiblog'),
            'Anhien' => $request->get('Anhien'),
        ]);
        $lt->save();
        return redirect ('/loaiblog')->with('success','Đã thêm loại blog mới');
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
        $row =LoaiBlog::find($id);
        return view('admin.loaiblog.edit',compact('row'));
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
        $lt = LoaiBlog ::find($id);
      
        
        $lt->name_loaiblog = $request->get('name_loaiblog');
        $lt->Anhien = $request->get('Anhien');
       
          $lt->save();
        return redirect('/loaiblog')->with('success', 'Cập nhật thành công !');
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lt = LoaiBlog::find($id);
        if ($lt->ktblog()->get()->toArray()==null) {
            $lt->delete();
            return redirect('/loaiblog')->with('success', 'Đã xóa xong loại blog vừa chọn');
        }else{
            return redirect('/loaiblog')->with('loi', 'Không thể xóa loại blog vừa chọn do chứa blog.');
        }
    }
}
