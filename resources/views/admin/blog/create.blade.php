@extends('admin.layoutadmin')
@section('pagetitle', "THÊM BLOG MỚI")
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
                        <li class="breadcrumb-item active">THÊM BLOG MỚI</li>
                    </ul>
                </div>

            </div>
        </div>
        <div class="container">
            <div class="cart">
                <form class="" id="form_validation" method="post" action="{{route('blog.store')}}" enctype="multipart/form-data" >
                    {{csrf_field()}}

                    <div class="form-group row" >
                    <div class="col-md-6 row">
                    <div class="form-group col-md-12">
                        <input type="text" class="form-control" placeholder="Tên" name="name_blog" required>
                    </div>

                    <div class="form-group col-md-12">
                        <select  name="id_loaiblog" class="form-control">
                            <option value="0">Chọn thể loại</option>
                          
                            <?php
                                $kq = App\LoaiBlog::select("id_loaiblog", "name_loaiblog")->get();
                                ?>
                                @foreach ($kq as $theloai)
                        <option value='{{$theloai->id_loaiblog}}'>{{$theloai->name_loaiblog}}</option>  
                                @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="image">Hình mô tả</label>
                          <input type="file" class="form-control"  name="hinh_blog" required>
                      </div>

                      <div class="form-group col-md-12">
                        <label for="Ngay">Ngày Đăng</label>
                          <input type="date" class="form-control datepicker "  name="ngay_blog" required>
                      </div>
                </div>

                <div class="col-md-6 row">
                 
                    <div class="form-group col-md-12">
                        <label for="tomtat_blog"> Tóm Tắt </label>
                        <textarea class="summernote" name="tomtat_blog" id="" cols="30" rows="10"></textarea>
                        </div>
                </div>

                </div>

                <div class="col-sm-md">
                    <label for="noidung_blog"> Nội Dung </label>
                        <textarea name="noidung_blog" class="summernote"></textarea>
                </div>



                 
                  

                    <div class="form-group">
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
