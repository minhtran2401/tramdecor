@extends('admin.layoutadmin')
@section('pagetitle', "THÊM NHÂN VIÊN MỚI")
@section('main')
<div class="main-content" style="min-height: 659px;">
    <section class="section">
      <div class="section-body">
            <!-- add content here -->
               <div class="cart">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>NHÂN VIÊN</h2>
                    <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{asset('dashboard')}}"><i class="zmdi zmdi-home"></i> Trang Chủ</a></li>
                        <li class="breadcrumb-item active">THÊM NHÂN VIÊN MỚI</li>
                    </ul>
                </div>
               
            </div>
        </div>
        <div class="container>
          
               
            <div class="cart">
                <form id="form_validation" method="post" action="{{route('nhanvien.store')}}" enctype="multipart/form-data"  >
                    {{csrf_field()}}
                    <div class="form-group form-float">
                        <input type="text" class="form-control" placeholder="Tên Nhân Viên" name="name_nv" required>
                    </div>

                    <div class="form-group form-float">
                        <input type="text" class="form-control" placeholder="Chức Vụ Nhân Viên" name="chucvu_nv" required>
                    </div>
                    <div class="form-group form-float">
                        <label for="hinh_nhanvien">Hình đại diện</label>
                          <input type="file" class="form-control"  name="hinh_nhanvien" required>
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


