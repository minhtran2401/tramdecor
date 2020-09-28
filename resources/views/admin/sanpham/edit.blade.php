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
                    <h2>SẢN PHẨM</h2>
                    <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{'dashboard'}}"><i class="zmdi zmdi-home"></i> Trang Chủ</a></li>
                        <li class="breadcrumb-item active">CHỈNH SỬA DỰ ÁN</li>
                    </ul>
                </div>

            </div>
        </div>
        <div class="container">
            <div class="cart">
                <form class="" id="form_validation" method="post" action="{{route('sanpham.update',$row->id_page)}}" enctype="multipart/form-data" >
                    {{csrf_field()}}
                    {!! method_field('patch') !!}

 
                <div class="form-group row" >
                    <div class="col-md-6  ">
                        <div class="col-md-12">
                            <div style="color:black" class="text-center mb-3">THÔNG TIN DỰ ÁN</div>
                        </div>
                        <div class="form-group col-md-12 ">
                           <label for="time_page">Thời Gian</label>
                        <input type="date" class="form-control datepicker "  name="time_page" value="{{$row->time_page}}" required></div>

                        <div class="form-group col-md-12 ">
                       
                        <input type="text" class="form-control" value="{{$row->diadiem_page}}" name="diadiem_page" placeholder=" Địa Điểm" >
                        </div>

                        <div class="form-group col-md-12 ">
                          
                            <input type="text" class="form-control" value="{{$row->dientich_page}}" name="dientich_page" placeholder=" Diện Tích" >
                        </div>

                        <div class="form-group col-md-12 ">
                          
                            <input type="text" class="form-control" value="{{$row->style_page}}" name="style_page" placeholder=" Phong Cách Thiết Kế" >
                        </div>

                    </div>

                    <div class="col-md-6 ">
                        <div class="col-md-12">
                            <div style="color:black" class="text-center mb-3">TÓM TẮT DỰ ÁN</div>
                        </div>
                        <div class="form-group col-md-12 ">
                            <label for="hinh_page_pri">Hình đại diện của dự án</label>
                            <input type="file" class="form-control" value="{{$row->hinh_page_pri}}"  name="hinh_page_pri" >       
                        </div>


                        <div class="form-group col-md-12">
                            <input type="text" class="form-control" value="{{$row->name_page}}" placeholder="Tên Dự Án" name="name_page" required>
                        </div>
    
                        <div class="form-group col-md-12">
                            <select  name="id_dv" class="form-control">
                                <option value="0">Chọn dịch vụ</option>
                              
                               
    
                                    @php
                                    $kq = App\DichVu::select("id_dv", "name_dv")->get();
                                    @endphp
                                    @foreach ($kq as $dv)
                                    @if ($row->id_dv == $dv->id_dv)
                            <option value='{{$dv->id_dv}}' selected >{{$dv->name_dv}}</option>  
                            @else
                            <option value='{{$dv->id_dv}}'>{{$dv->name_dv}}</option>  
                            @endif
                                    @endforeach
                            </select>
                        </div>
    
                        <div class="form-group col-md-12">
                            <div class="col-md-12"> <label for="">Ẩn hoặc Hiện dự án</label> </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="Anhien" id="Hien" class="with-gap" value="1" @if ($row->Anhien == 1) checked @endif >
                                <label class="form-check-label" for="Hien">Hiện</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="Anhien" id="An" class="with-gap" value="0" @if ($row->Anhien == 0) checked  @endif >
                                <label class="form-check-label" for="An">Ẩn</label>
                            </div>
                        </div>
    

                    </div>
                </div>

              
                 
                <div class="form-group col-md-12 ">
                    <label for="hinh_page_demo">Hình demo cho khách hàng xem</label>
                    
                    <div class="input-group control-group incrementdemo" >
                       
                        <div class="input-group-btn"> 
                          <button class="btn btn-primary themdemo" type="button"><i class="glyphicon glyphicon-plus"></i>Thêm</button>
                        </div>
                      </div>
                      
                      <div class="clonedemo hide">         
                        <div class="control-group input-group" style="margin-top:10px">
                           
                        <input type="file" name="hinh_page_demo[]"  class="form-control">
                          <div class="input-group-btn"> 
                            <button class="btn btn-danger xoademo" type="button"><i class="glyphicon glyphicon-remove"></i> Xóa</button>
                          </div>
                        </div>
                      </div>
                      @foreach(json_decode($row->hinh_page_demo, true) as $demo)
                    {{-- <form action="{{route('sanpham.update',$row->id_page)}}" method="post" enctype="multipart/form-data">
                    @csrf --}}
                      <div class="clonedemo1 hide">         
                        <div class="control-group input-group" style="margin-top:10px">
                            <div class="chocolat-parent">
                                <a href="{{asset('hinhdemo')}}/{{$demo}}" class="chocolat-image" >
                                  <div data-crop-image="75">
                                  <img alt="image" src="{{asset('hinhdemo')}}/{{$demo}}"  class="avatar avatar-xl">
                                  </div>
                                </a>
                              </div>
                        <input type="file" name="hinh_page_demo[]" value="{{$demo}}" class="form-control">
                          <div class="input-group-btn"> 
                            <button class="btn btn-primary updatedemo" type="button"> Cập Nhật</button>
                            <button class="btn btn-danger xoademo" type="button"><i class="glyphicon glyphicon-remove"></i> Xóa</button>
                          </div>
                        </div>
                      </div>
                    {{-- </form> --}}
                      @endforeach
                      
                </div>

                <div class="form-group col-md-12 ">
                    <label for="hinh_page_real">Hình ảnh thật của dự án</label>
                    <div class="input-group control-group incrementreal" >
                      
                        <div class="input-group-btn"> 
                          <button class="btn btn-primary themreal" type="button"><i class="glyphicon glyphicon-plus"></i>Thêm</button>
                        </div>
                      </div>
                      <div class="clonereal hide">
                        <div class="control-group input-group" style="margin-top:10px">
                            
                          <input type="file" name="hinh_page_real[]"  class="form-control">
                          <div class="input-group-btn"> 
                          
                            <button class="btn btn-danger xoareal" type="button"> Xóa</button>
                          </div>
                        </div>
                      </div>
                      @foreach(json_decode($row->hinh_page_real, true) as $real)
                      {{-- <form action="" method="post" enctype="multipart/form-data">
                        @csrf
                   --}}
                      <div class="clonereal1 hide">
                        <div class="control-group input-group" style="margin-top:10px">
                            <div class="chocolat-parent">
                                <a href="{{asset('hinhreal')}}/{{$real}}" class="chocolat-image" >
                                  <div data-crop-image="75">
                                  <img alt="image" src="{{asset('hinhreal')}}/{{$real}}"  class="avatar avatar-xl">
                                  </div>
                                </a>
                              </div>
                          <input type="file" name="hinh_page_real[]" value="{{$real}}" class="form-control">
                          <div class="input-group-btn"> 
                            <button class="btn btn-primary updatereal" type="button"> Cập Nhật</button>
                            <button class="btn btn-danger xoareal" type="button"><i class="glyphicon glyphicon-remove"></i> Xóa</button>
                          </div>
                        </div>
                      </div>
                    {{-- </form> --}}
                      @endforeach

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
