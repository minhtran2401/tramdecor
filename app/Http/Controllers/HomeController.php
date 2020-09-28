<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // public function show(){
    //     $kq = DB::table("page")
    //         // ->select('id_temp', 'name', 'image', 'path', 'size', 'Ngay', 'description', 'id_type', 'tags', 'Anhien')
    //         ->where("Anhien",1)
    //         ->offset(0)->paginate(6);
    //     $title = "ALL TEMPLATE";
    //     $data = ['kq'=> $kq, 'title'=>$title];
    //     return view("FE.show", $data);
    // }

    public function thietke(){
        $dv = DB::table("dichvu")
      
      
        -> where('AnHien', '=', '1')
        ->get();
        $title = "ALL TEMPLATE";
        $data = ['dv'=> $dv, 'title'=>$title];
        return view("FE.thietke", $data);
    }

    public function thietkesg($id_dv, $slug=null){
   
        $sp = DB::table("dichvu")
            ->join('page','page.id_dv','=','dichvu.id_dv')
            ->where("dichvu.id_dv",$id_dv)
           
            ->where("dichvu.Anhien",1)
            ->offset(0)->paginate(3);

        $kq=DB::table('dichvu')
        ->where('id_dv',$id_dv)
        ->where('Anhien','1')
        ->get();
    
        $Ten_dv = DB::table("dichvu")
        ->where("id_dv", $id_dv)
        ->value("name_dv");
     
        $Slogan_dv = DB::table("dichvu")
        ->where("id_dv", $id_dv)
        ->value("slogan_dv");

        $img_banner = DB::table("dichvu")
        ->where("id_dv", $id_dv)
        ->value("banner_dv");


        $data = ['kq'=> $kq,'Ten_dv'=> $Ten_dv,'Slogan_dv'=>$Slogan_dv,'img_banner'=>$img_banner,'sp'=>$sp];
        return view("FE.dichvusg", $data);
    }
}
