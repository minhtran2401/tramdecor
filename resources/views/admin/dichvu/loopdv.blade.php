@extends('admin.layoutadmin')
@section('pagetitle', "THÊM DỊCH VỤ MỚI ")
@section('main')
<div class="main-content">
    <section class="section">
      <div class="section-body">
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
              {{ session()->get('canhbao') }}
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
        <div class="row">
          <div class="col-12">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb bg-primary text-white-all">
                <li class="breadcrumb-item"><a href="#"><i class="fas fa-tachometer-alt"></i> Home</a></li>
                <li class="breadcrumb-item"><a href="#"><i class="far fa-file"></i> Dịch Vụ</a></li>
                <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-list"></i> Danh Sách Dịch Vụ</li>
              </ol>
            </nav>
            <div class="card">
              <div class="card-header">
                <h4>DANH SÁCH DỊCH VỤ</h4>
               
              <a href="{{route('dichvu.create')}}"> <button class="btn btn-primary">
                <i class="fa fa-plus-square " aria-hidden="true"></i>
              </button>
            </a>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-striped" id="table-1">
                    <thead>
                      <tr>
                        <th class="text-center">
                          #
                        </th>
                        <th>Tên/ Slogan </th>
                        <th>Hình mô tả</th>
                        <th>Banner</th>
                        <th>Mô Tả</th>
                        <th>Quản Lí</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($ds as $row)
                      <tr>
                        <td class="text-center" >
                           <div>{{ $row->id_dv}}</div> 
                            <div> {{ $row->Anhien==1? "Đang hiện " : "Đang ẩn"}}</div>
                        </td>
                        <td width=30%>
                        <div style="color : rgb(235, 84, 38)" >{{$row->name_dv}}</div>
                        <div>{{$row->slogan_dv}}</div>
                        </td>

                        <td>
                          <div class="chocolat-parent">
                            <a href="{{asset('imgdichvu')}}/{{$row->image_dv}}" class="chocolat-image"  title="{{$row->name_dv}}">
                              <div data-crop-image="75">
                              <img alt="image" src="{{asset('imgdichvu')}}/{{$row->image_dv}}"  class="avatar avatar-xl">
                              </div>
                            </a>
                          </div>
                        </td>

                        <td>
                          <div class="chocolat-parent">
                            <a href="{{asset('imgbanner')}}/{{$row->banner_dv}}" class="chocolat-image"  title="{{$row->name_dv}}">
                              <div data-crop-image="75">
                              <img alt="image" src="{{asset('imgbanner')}}/{{$row->banner_dv}}"  class="avatar avatar-xl">
                              </div>
                            </a>
                          </div>
                      </td>

                      <td width=20%>
                        <textarea class="form-control" cols="30" rows="5">
                          {{$row->mota_dv}}
                        </textarea>
                      </td>



                        <td >


                          <form class="form-check-inline"  method="post">

                         <button style="border: 0"style="border: 0"  > <a href="{{route('dichvu.edit', $row->id_dv)}}"  title="Sửa" class="btn btn-icon btn-primary"><i class="fa fa-eye" aria-hidden="true"></i> Sửa</a></button>
                        </form>
                        <form class="form-check-inline" action="{{route('dichvu.destroy', $row->id_dv)}}" method="POST">
                                {{csrf_field()}}
                                {!! method_field('delete') !!}
                             <button class="btn btn-icon btn-danger" style="border: 0" onclick="return confirm('Xóa hả ?');" ><i class="fa fa-trash" aria-hidden="true"></i> Xóa</button>
                        </form>

                      </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
@endsection
