@extends('admin.layoutadmin')
@section('pagetitle', "THÊM SP MỚI")
@section('main')
<div class="main-content" style="min-height: 659px;">
    <section class="section">
      <div class="section-body">
               <div class="cart">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>DỰ ÁN</h2>
                    <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{'dashboard'}}"><i class="zmdi zmdi-home"></i> Trang Chủ</a></li>
                        <li class="breadcrumb-item active">THÊM DỰ ÁN MỚI</li>
                    </ul>
                </div>

            </div>
        </div>
        <div class="container">
            <div class="cart">
                <form class="" id="form_validation" method="post" action="{{route('sanpham.store')}}" enctype="multipart/form-data" >
                    {{csrf_field()}}

 
                <div class="form-group row" >
                    <div class="col-md-6  ">
                        <div class="col-md-12">
                            <div style="color:black" class="text-center mb-3">THÔNG TIN DỰ ÁN</div>
                        </div>
                        <div class="form-group col-md-12 ">
                           <label for="time_page">Thời Gian</label>
                            <input type="date" class="form-control datepicker "  name="time_page" required>                        </div>

                        <div class="form-group col-md-12 ">
                       
                            <input type="text" class="form-control" name="diadiem_page" placeholder=" Địa Điểm" >
                        </div>

                        <div class="form-group col-md-12 ">
                          
                            <input type="text" class="form-control" name="dientich_page" placeholder=" Diện Tích" >
                        </div>

                        <div class="form-group col-md-12 ">
                          
                            <input type="text" class="form-control" name="style_page" placeholder=" Phong Cách Thiết Kế" >
                        </div>

                    </div>

                    <div class="col-md-6 ">
                        <div class="col-md-12">
                            <div style="color:black" class="text-center mb-3">TÓM TẮT DỰ ÁN</div>
                        </div>
                        <div class="form-group col-md-12 ">
                            <label for="hinh_page_pri">Hình đại diện của dự án</label>
                            <input type="file" class="form-control "  name="hinh_page_pri" required>       
                        </div>


                        <div class="form-group col-md-12">
                            <input type="text" class="form-control" placeholder="Tên Dự Án" name="name_page" required>
                        </div>
    
                        <div class="form-group col-md-12">
                            <select  name="id_dv" class="form-control">
                                <option value="0">Chọn Dịch Vụ</option>
                              
                                <?php
                                    $kq = App\DichVu::select("id_dv", "name_dv")->get();
                                    ?>
                                    @foreach ($kq as $theloai)
                            <option value='{{$theloai->id_dv}}'>{{$theloai->name_dv}}</option>  
                                    @endforeach
                            </select>
                        </div>
    
                        <div class="form-group col-md-12">
                            <div class="col-md-12"> <label for="">Ẩn hoặc Hiện dự án</label> </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="Anhien" id="Hien" class="with-gap" value="1" checked="" >
                                <label class="form-check-label" for="Hien">Hiện</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="Anhien" id="An" class="with-gap" value="0" >
                                <label class="form-check-label" for="An">Ẩn</label>
                            </div>
                        </div>
    

                    </div>
                </div>

              
                 
                <div class="form-group col-md-12 ">
                    <label for="hinh_page_demo">Hình demo cho khách hàng xem</label>
                    <div class="input-group control-group incrementdemo" >
                        <input type="file" name="hinh_page_demo[]" class="form-control">
                        <div class="input-group-btn"> 
                          <button class="btn btn-primary themdemo" type="button"><i class="glyphicon glyphicon-plus"></i>Thêm</button>
                        </div>
                      </div>
                      <div class="clonedemo hide">
                        <div class="control-group input-group" style="margin-top:10px">
                          <input type="file" name="hinh_page_demo[]" class="form-control">
                          <div class="input-group-btn"> 
                            <button class="btn btn-danger xoademo" type="button"><i class="glyphicon glyphicon-remove"></i> Xóa</button>
                          </div>
                        </div>
                      </div>
                </div>

                <div class="form-group col-md-12 ">
                    <label for="hinh_page_real">Hình ảnh thật của dự án</label>
                    <div class="input-group control-group incrementreal" >
                        <input type="file" name="hinh_page_real[]" class="form-control">
                        <div class="input-group-btn"> 
                          <button class="btn btn-primary themreal" type="button"><i class="glyphicon glyphicon-plus"></i>Thêm</button>
                        </div>
                      </div>
                      <div class="clonereal hide">
                        <div class="control-group input-group" style="margin-top:10px">
                          <input type="file" name="hinh_page_real[]" class="form-control">
                          <div class="input-group-btn"> 
                            <button class="btn btn-danger xoareal" type="button"><i class="glyphicon glyphicon-remove"></i> Xóa</button>
                          </div>
                        </div>
                      </div>
                </div>

                    



                      </div>
                    <button class="btn btn-raised btn-primary waves-effect" type="submit">LƯU DATABASE</button>
                    <button class="btn btn-danger" type="reset">HỦY</button>
                </form>


            </div>
        </div>
    </div>
      </div>
    </section>

  </div>
@endsection
