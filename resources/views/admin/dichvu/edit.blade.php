@extends('admin.layoutadmin')
@section('pagetitle', "SỬA DỊCH VỤ")
@section('main')
<div class="main-content" style="min-height: 659px;">
    <section class="section">
      <div class="section-body">
            <!-- add content here -->
               <div class="cart">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>DỊCH VỤ</h2>
                    <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{'dashboard'}}"><i class="zmdi zmdi-home"></i> Trang Chủ</a></li>
                        <li class="breadcrumb-item active">SỬA DỊCH VỤ</li>
                    </ul>
                </div>

            </div>
        </div>
        <div class="container">


            <div class="cart">
                <form id="form_validation" method="post" action="{{route('dichvu.update', $row->id_dv)}}" enctype="multipart/form-data"  >
                  {{csrf_field()}}
                  {!! method_field('patch') !!}
                    <div class="form-group form-float">
                        <input type="text" class="form-control" placeholder="Tên Dịch Vụ" value="{{$row->name_dv}}" name="name_dv" required>
                    </div>
                    <div class="form-group row ">

                    <div class="form-group col-md-6">
                        <label for="image_dv">Hình mô tả</label>
                        <input type="file" class="form-control"  name="image_dv" >
                    </div>

                    <div class="form-group col-md-6 ">
                        <label for="banner_dv">Banner</label>
                        <input type="file" class="form-control"  name="banner_dv" >
                    </div>
                    </div>

                    <div class="form-group row ">
                        <div class="col-sm-md">
                            <label for="description"> Mô Tả </label>
                                <textarea name="mota_dv" class="summernote">
                                    {{$row->mota_dv}}
                                </textarea>
                        </div>
    
                        <div class="form-group col-md-6 ">
                            <label for="mota_dv">Slogan Dịch Vụ</label>
                        <input type="text" class="form-control" name="slogan_dv" value="{{$row->slogan_dv}}">  
                        </div>
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
