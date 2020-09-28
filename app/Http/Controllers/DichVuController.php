<?php

namespace App\Http\Controllers;
use App\DichVu;
use Illuminate\Http\Request;
class DichVuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ds = DichVu::all();
        return view('admin.dichvu.index', compact('ds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.dichvu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  $fileimg = $request->file('image_dv'); // tạo biến lấy dữ liệu từ input
        $filename = $fileimg->getClientOriginalName(); // lấy tên theo tên gốc của file
      
        $pathimg = $fileimg->move(public_path().'/imgdichvu/', $filename); //chỗ chứa file

        $filebanner = $request->file('banner_dv'); // tạo biến lấy dữ liệu từ input
        $filenamebn = $filebanner->getClientOriginalName(); // lấy tên theo tên gốc của file
        $pathimg = $filebanner->move(public_path().'/imgbanner/', $filenamebn); //chỗ chứa file
        $lt = new DichVu([
            'image_dv' => $filename,
            'slug'=>\Str::slug($request->name_dv),
            'banner_dv' => $filenamebn,
            'slogan_dv' => $request->get('slogan_dv'),
            'mota_dv' => $request->get('mota_dv'),
            'name_dv' => $request->get('name_dv'),
            'Anhien' => $request->get('Anhien'),
        ]);
        $lt->save();
        return redirect ('/dichvu')->with('success','Đã thêm dịch vụ mới');
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
        $row =DichVu::find($id);
        return view('admin.dichvu.edit',compact('row'));
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
             
        $lt = DichVu ::find($id);
        $fileimg = $request->file('image_dv'); // tạo biến lấy dữ liệu từ input
        $filebanner = $request->file('banner_dv');
        if ($fileimg){
        $fileimg = $request->file('image_dv'); // tạo biến lấy dữ liệu từ input
        $filename = $fileimg->getClientOriginalName(); // lấy tên theo tên gốc của file
        $pathimg = $fileimg->move(public_path().'/imgdichvu/', $filename); //chỗ chứa file

        
      
            $lt->slug =  \Str::slug($request->name_dv);
            $lt->name_dv = $request->get('name_dv');
            $lt->Anhien = $request->get('Anhien');
            $lt->mota_dv = $request->get('mota_dv');
            $lt->slogan_dv = $request->get('slogan_dv');
            $lt->image_dv = $filename;
        }
        else
        $lt->slug =  \Str::slug($request->name_dv);
        $lt->name_dv = $request->get('name_dv');
        $lt->Anhien = $request->get('Anhien');
        $lt->mota_dv = $request->get('mota_dv');
        $lt->slogan_dv = $request->get('slogan_dv');
    
        if($filebanner){
            $filebanner = $request->file('banner_dv');
            $filenamebanner = $filebanner->getClientOriginalName();
            $pathzip = $filebanner->move(public_path().'/imgbanner/', $filenamebanner);

      
            $lt->slug =  \Str::slug($request->name_dv);
            $lt->name_dv = $request->get('name_dv');
            $lt->Anhien = $request->get('Anhien');
            $lt->mota_dv = $request->get('mota_dv');
            $lt->slogan_dv = $request->get('slogan_dv');
            $lt->banner_dv = $filenamebanner;
         
          
        }
        else
        $lt->slug =  \Str::slug($request->name_dv);
        $lt->name_dv = $request->get('name_dv');
        $lt->Anhien = $request->get('Anhien');
        $lt->mota_dv = $request->get('mota_dv');
        $lt->slogan_dv = $request->get('slogan_dv');
       
        $lt->save();
        return redirect('/dichvu')->with('success', 'Cập nhật thành công !');
      }
      
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lt = DichVu::find($id);
        if ($lt->ktpage()->get()->toArray()==null) {
            $lt->delete();
            return redirect('/dichvu')->with('canhbao', 'Đã xóa xong dịch vụ vừa chọn');
        }else{
            return redirect('/dichvu')->with('loi', 'Không thể xóa dịch vụ vừa chọn do chứa dự án.');
        }
    }
}
