

@extends('admin.layoutadmin')
@section('pagetitle', "SỬA BLOG")
@section('main')
<div class="main-content" style="min-height: 659px;">
    <section class="section">
      <div class="section-body">
               <div class="cart">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>BLOG</h2>
                    <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{asset('dashboard')}}"><i class="zmdi zmdi-home"></i> Trang Chủ</a></li>
                        <li class="breadcrumb-item active">SỬA BLOG</li>
                    </ul>
                </div>

            </div>
        </div>
        <div class="container">
            <div class="cart">
                <form class="" id="form_validation" method="post" action="{{route('blog.update',$row->id_blog)}}" enctype="multipart/form-data" >
                    {{csrf_field()}}
                    {!! method_field('patch') !!}

                    <div class="form-group row" >
                    <div class="col-md-6 row">
                    <div class="form-group col-md-12">
                    <input type="text" class="form-control" value="{{$row->name_blog}}" placeholder="Tên" name="name_blog" required>
                    </div>

                    <div class="form-group col-md-12">
                        <select  name="id_loaiblog" class="form-control">
                            <option value="0">Chọn thể loại</option>

                                @php
                                $kq = App\LoaiBlog::select("id_loaiblog", "name_loaiblog")->get();                                @endphp
                                @foreach ($kq as $theloai)
                                @if ($row->id_loaiblog == $theloai->id_loaiblog)
                        <option value='{{$theloai->id_loaiblog}}' selected >{{$theloai->name_loaiblog}}</option>  
                        @else
                        <option value='{{$theloai->id_loaiblog}}'>{{$theloai->name_loaiblog}}</option>  
                        @endif
                                @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-9">
                        <label for="hinh_blog">Hình mô tả</label>
                    <input type="file" class="form-control" value="{{$row->hinh_blog}}"  name="hinh_blog">
                      </div>

                      <div class="form-group col-md-3">
                        <label for="image">Hình cũ</label>
                        <div class="chocolat-parent">
                            <a href="{{asset('imgblog')}}/{{$row->hinh_blog}}" class="chocolat-image"  title="{{$row->name_blog}}">
                              <div data-crop-image="75">
                              <img alt="image" src="{{asset('imgblog')}}/{{$row->hinh_blog}}"  class="avatar avatar-xl">
                              </div>
                            </a>
                          </div>
                      </div>

                      <div class="form-group col-md-12">
                        <label for="Ngay">Ngày Đăng</label>
                      <input type="date" class="form-control datepicker" value="{{$row->ngay_blog}}"  name="ngay_blog" required>
                      </div>
                </div>

                <div class="col-md-6 row">
                 
                    <div class="form-group col-md-12">
                        <label for="tomtat_blog"> Tóm Tắt </label>
                    <textarea class="summernote"  name="tomtat_blog" id="" cols="30" rows="10">{{$row->tomtat_blog}}</textarea>
                        </div>
                </div>

                </div>

                <div class="col-sm-md">
                    <label for="noidung_blog"> Nội Dung </label>
                        <textarea name="noidung_blog" class="summernote">{{$row->noidung_blog}}</textarea>
                </div>



                 
                  

                    <div class="form-group">
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
