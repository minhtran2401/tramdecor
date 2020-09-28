@extends('admin.layoutadmin')
@section('pagetitle', 'QUẢN LÍ ADMIN ')
@section('main')

<div class="main-content">
    <section class="section" >
      <div class="row">
        <div class="col-12">
          <!------------------->
          @if(session()->get('success'))
          <div class="alert alert-info alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-info"></i> Thông báo!</h4>
            {{ session()->get('success') }}
          </div>
          @endif
          @if(session()->get('canhbao'))
          <div class="alert alert-warning alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-warning"></i> Thông báo!</h4>
            {{ session()->get('successx') }}
          </div>
          @endif
          @if(session()->get('loi'))
          <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-ban"></i> Thông báo!</h4>
            {{ session()->get('loi') }}
          </div>
          @endif
          <!------------------->
        </div>
      </div>
    </section>
    <section class="section">

      <div class="row">
        <div class="col-12 col-sm-12 col-lg-12">
          <div class="card ">
            <div class="card-header text-center">
              <h4>Đang Tiếp Tục Xây Dựng ...</h4>

            </div>
            
          </div>
        </div>
      </div>

    </section>
   
  </div>
@endsection