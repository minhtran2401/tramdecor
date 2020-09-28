<?php

namespace App\Http\Controllers;
use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ds = Blog::all();
        return view('admin.blog.index', compact('ds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  $fileimg = $request->file('hinh_blog'); // tạo biến lấy dữ liệu từ input
        $filename = $fileimg->getClientOriginalName(); // lấy tên theo tên gốc của file
        $pathimg = $fileimg->move(public_path().'/imgblog/', $filename); //chỗ chứa file
        $lt = new Blog([
            'hinh_blog' => $filename,
            'name_blog' => $request->get('name_blog'),
            'id_loaiblog' => $request->get('id_loaiblog'),
            'tomtat_blog' => $request->get('tomtat_blog'),
            'ngay_blog' => $request->get('ngay_blog'),
            'noidung_blog' => $request->get('noidung_blog'),
            'Anhien' => $request->get('Anhien'),
        ]);
        $lt->save();
        return redirect ('/blog')->with('success','Đã thêm blog mới');
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
        $row =Blog::find($id);
        return view('admin.blog.edit',compact('row'));
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
        $lt = Blog ::find($id);
        $fileimg = $request->file('hinh_blog'); // tạo biến lấy dữ liệu từ input
        if ($fileimg){
          $fileimg = $request->file('hinh_blog'); // tạo biến lấy dữ liệu từ input
          $filename = $fileimg->getClientOriginalName(); // lấy tên theo tên gốc của file
          $pathimg = $fileimg->move(public_path().'/imgblog/', $filename); //chỗ chứa file

          $lt->id_loaiblog = $request->get('id_loaiblog');
          $lt->tomtat_blog = $request->get('tomtat_blog');
          $lt->ngay_blog = $request->get('ngay_blog');
          $lt->noidung_blog = $request->get('noidung_blog');
          $lt->name_blog = $request->get('name_blog');
          $lt->hinh_blog = $filename;

             $lt->Anhien = $request->get('Anhien');}
        else{
            $lt->id_loaiblog = $request->get('id_loaiblog');
            $lt->tomtat_blog = $request->get('tomtat_blog');
            $lt->ngay_blog = $request->get('ngay_blog');
            $lt->noidung_blog = $request->get('noidung_blog');
            $lt->name_blog = $request->get('name_blog');
            $lt->Anhien = $request->get('Anhien');}
          $lt->save();
        return redirect('/blog')->with('success', 'Cập nhật thành công !');
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::find($id);
        $blog->delete();
        return redirect('/blog')->with('success','Đã xóa blog thành công !');
    }
}
