@extends('admin.layoutadmin')
@section('pagetitle', "SỬA THỂ LOẠI")
@section('main')
<div class="main-content" style="min-height: 659px;">
    <section class="section">
      <div class="section-body">
            <!-- add content here -->
               <div class="cart">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>ADMIN </h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="../admin"><i class="zmdi zmdi-home"></i> MiNhaTi</a></li>
                        <li class="breadcrumb-item active">CẬP NHẬT THÔNG TIN ADMIN</li>
                    </ul>
                </div>

            </div>
        </div>
        <div class="container>
          
               
            <div class="cart">
              <form class="" id="form_validation" method="post" action="{{route('user.update',$user->id)}}" enctype="multipart/form-data" >
                {{csrf_field()}}
                {!! method_field('patch') !!}

                    <div class="form-group row" >

                      <div class="form-group col-md-6">
                      <input type="text" class="form-control" value="{{$user->name}}" placeholder="Họ Và Tên" name="name" required>
                    </div>

                    <div class="form-group col-md-6">
                    <input type="email" class="form-control" placeholder="Email" value="{{$user->email}}" name="email" required>
                    </div>

                    <div class="form-group col-md-6">
                      <label for="avatar">Tài khoản</label>
                    <input type="text" class="form-control" value="{{$user->username}}"  placeholder="Tài Khoản" name="username" required>
                    </div>

                

                    <div class="form-group col-md-6">
                      <label for="avatar">Mật khẩu</label>
                    <input type="password" class="form-control" id="password" value="{{$user->password}}" placeholder="Mật Khẩu" name="password" required>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="avatar">Nhập lại Mật khẩu</label>
                      <input type="password" class="form-control" id="repassword" value="{{$user->password}}" placeholder="Mật Khẩu" name="repassword" required>
                      </div>
                      <script>
                          var password = document.getElementById("password")
  , repassword = document.getElementById("repassword");

function validatePassword(){
  if(password.value != repassword.value) {
    repassword.setCustomValidity("Mật khẩu nhập lại chưa đúng !");
  } else {
    repassword.setCustomValidity('');
  }
}

password.onchange = validatePassword;
repassword.onkeyup = validatePassword;
                      </script>
                    
                    
                    <div class="form-group col-md-6">
                      <label for="avatar">Hình đại diện</label>
                      <input type="file" class="form-control" name="avatar">
                    </div>

                    
                    <div class="form-group col-md-6">
                      <label for="diachi">Địa Chỉ</label>
                    <input type="text" class="form-control" value="{{$user->diachi}}"  placeholder="Địa Chỉ" name="diachi" required>
                    </div>


                    <div class="form-group col-md-6"> 
                      <div><label for="active">Trạng Thái</label></div>
                      <div class="form-check form-check-inline">
                          <input type="radio" name="active" id="hd" class="with-gap" value="1" @if ($user->active == 1) checked @endif >
                          <label class="form-check-label" for="hd">Hoạt Động</label>
                      </div>                                
                      <div class="form-check form-check-inline">
                          <input type="radio" name="active" id="dis" class="with-gap" value="0" @if ($user->active== 0) checked @endif >
                          <label class="form-check-label" for="dis">Vô Hiệu Hóa</label>
                      </div>
                  </div>
                  
                  <div class="form-group col-md-6"> 
                    <div><label for="active">Phân Quyền</label></div>
                    <div class="form-check form-check-inline">
                        <input type="radio" name="idgroup" id="boss" class="with-gap" value="1" @if ($user->idgroup == 1) checked @endif >
                        <label class="form-check-label" for="boss">BOSS</label>
                    </div>                                
                    <div class="form-check form-check-inline">
                        <input type="radio" name="idgroup" id="admin" class="with-gap" value="0" @if ($user->idgroup == 0) checked @endif >
                        <label class="form-check-label" for="admin">Admin</label>
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
 
