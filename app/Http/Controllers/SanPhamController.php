<?php

namespace App\Http\Controllers;
use App\SanPham;

use Illuminate\Http\Request;

class SanPhamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ds = SanPham::all();
        return view('admin.sanpham.index', compact('ds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sanpham.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {

        $this->validate($request, [

                'hinh_page_demo' => 'required',
                'hinh_page_demo.*' => 'mimes:png,jpg,jpeg,ico',
                'hinh_page_real' => 'required',
                'hinh_page_real.*' => 'mimes:png,jpg,jpeg,ico'

        ]);
        
        
        if($request->hasfile('hinh_page_demo'))
         {

            foreach($request->file('hinh_page_demo') as $demo)
            {
                $name=$demo->getClientOriginalName();
                $demo->move(public_path().'/hinhdemo/', $name);  
                $data[] = $name;  
            }
            foreach($request->file('hinh_page_real') as $real)
            {
                $namereal=$real->getClientOriginalName();
                $real->move(public_path().'/hinhreal/', $namereal);  
                $datareal[] = $namereal;  
            }
            
         }
         $fileimg = $request->file('hinh_page_pri'); // tạo biến lấy dữ liệu từ input
         $filename = $fileimg->getClientOriginalName(); // lấy tên theo tên gốc của file
       
         $pathimg = $fileimg->move(public_path().'/hinhduan/', $filename); //chỗ chứa file
         $file= new SanPham();
         $file->hinh_page_demo=json_encode($data);
         $file->hinh_page_real=json_encode($datareal);
         $file->id_dv = $request->get('id_dv');
         $file->name_page = $request->get('name_page');
         $file->hinh_page_pri = $request->get('hinh_page_pri');
         $file->time_page = $request->get('time_page');
         $file->diadiem_page = $request->get('diadiem_page');
         $file->dientich_page = $request->get('dientich_page');
         $file->style_page = $request->get('style_page');
         $file->Anhien = $request->get('Anhien');
         $file->hinh_page_pri = $filename;



        
        $file->save();

        return redirect('/sanpham')->with('success', 'Thêm Dự Án Mới Thành Công !');
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
        $row =SanPham::find($id);
        return view('admin.sanpham.edit',compact('row'));
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

       
        $file= SanPham::find($id);
       
         $fileimg = $request->file('hinh_page_pri'); // tạo biến lấy dữ liệu từ input
         if($fileimg)
         {
         $fileimg = $request->file('hinh_page_pri'); // tạo biến lấy dữ liệu từ input
         $filename = $fileimg->getClientOriginalName(); // lấy tên theo tên gốc của file 
         $pathimg = $fileimg->move(public_path().'/hinhduan/', $filename); //chỗ chứa file
        
         $file->id_dv = $request->get('id_dv');
         $file->name_page = $request->get('name_page');
         $file->time_page = $request->get('time_page');
         $file->diadiem_page = $request->get('diadiem_page');
         $file->dientich_page = $request->get('dientich_page');
         $file->style_page = $request->get('style_page');
         $file->Anhien = $request->get('Anhien');
         $file->hinh_page_pri = $filename;
            }
         else{
            // $file->hinh_page_demo=json_encode($data);
            // $file->hinh_page_real=json_encode($datareal);
            $file->id_dv = $request->get('id_dv');
            $file->name_page = $request->get('name_page');
            $file->time_page = $request->get('time_page');
            $file->diadiem_page = $request->get('diadiem_page');
            $file->dientich_page = $request->get('dientich_page');
            $file->style_page = $request->get('style_page');
            $file->Anhien = $request->get('Anhien');
         }    
         if($request->hasfile('hinh_page_demo'))
         {
 
            foreach($request->file('hinh_page_demo') as $demo)
            {
                $name=$demo->getClientOriginalName();
                $demo->move(public_path().'/hinhdemo/', $name);  
                $data[] = $name;  
            }
            foreach($request->file('hinh_page_real') as $real)
            {
                $namereal=$real->getClientOriginalName();
                $real->move(public_path().'/hinhreal/', $namereal);  
                $datareal[] = $namereal;  
            }
            $file->hinh_page_demo=json_encode($data);
            $file->hinh_page_real=json_encode($datareal);
            
         }    
         else{
          
           
            $file->id_dv = $request->get('id_dv');
            $file->name_page = $request->get('name_page');
            $file->time_page = $request->get('time_page');
            $file->diadiem_page = $request->get('diadiem_page');
            $file->dientich_page = $request->get('dientich_page');
            $file->style_page = $request->get('style_page');
            $file->Anhien = $request->get('Anhien');
         }
        $file->save();

        return redirect('/sanpham')->with('success', 'Cập Nhật Thành Công !');
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
