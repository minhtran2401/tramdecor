@extends('admin.layoutadmin')
@section('pagetitle', "THÊM TIN TUYỂN DỤNG MỚI")
@section('main')
<div class="main-content" style="min-height: 659px;">
    <section class="section">
      <div class="section-body">
            <!-- add content here -->
               <div class="cart">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>TIN TUYỂN DỤNG</h2>
                    <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{asset('dashboard')}}"><i class="zmdi zmdi-home"></i> Trang Chủ</a></li>
                        <li class="breadcrumb-item active">THÊM TIN TUYỂN DỤNG MỚI</li>
                    </ul>
                </div>
               
            </div>
        </div>
        <div class="container">
          
               
            <div class="cart">
                <form id="form_validation" method="post" action="{{route('tuyendung.store')}}"   >
                    {{csrf_field()}}
                    <div class="form-group form-float">
                        <input type="text" class="form-control" placeholder="Vị trí cần tuyển ( Ví dụ : NHÂN VIÊN KĨ THUẬT, NHÂN VIÊN THIẾT KẾ,... )" name="name_tuyendung" required>
                    </div>

                    <div class="col-sm-md">
                        <label for="noidung_tuyendung"> Nội Dung Đăng Tuyển </label>
                            <textarea name="noidung_tuyendung" class="summernote"></textarea>
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


