@extends('admin.layoutadmin')
@section('pagetitle', "THÊM TIN TUYỂN DỤNG MỚI")
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
            @if(session()->get('successx'))
            <div class="alert alert-warning alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h4><i class="icon fa fa-warning"></i> Thông báo!</h4>
              {{ session()->get('successx') }}
            </div>
            @endif
            @if(session()->get('status'))
            <div class="alert alert-danger alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h4><i class="icon fa fa-ban"></i> Thông báo!</h4>
              {{ session()->get('status') }}
            </div>
            @endif
            <!------------------->
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb bg-primary text-white-all">
              <li class="breadcrumb-item"><a href="{{asset('dashboard')}}"><i class="fas fa-tachometer-alt"></i> Trang Chủ</a></li>
              <li class="breadcrumb-item"><a href="{{asset('tuyendung')}}"><i class="far fa-file"></i>Tin Tuyển Dụng</a></li>
                <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-list"></i> Danh Sách Tin Tuyển Dụng</li>
              </ol>
            </nav>
            <div class="card">
              <div class="card-header">
                <h4>DANH SÁCH VỊ TRÍ TUYỂN DỤNG</h4>
               
              <a href="{{route('tuyendung.create')}}"> <button class="btn btn-primary">
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
                        <th>Vị Trí Tuyển</th>
                        <th>Trạng Thái</th>
                        <th>Quản Lí</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($ds as $row)
                      <tr>
                        <td class="text-center" >
                            {{ $row->id_tuyendung}}
                        </td>
                        <td>
                        <div>{{$row->name_tuyendung}}</div>
                        </td>

                        <td>
                            <div> {{ $row->Anhien==1? "Đang hiện " : "Đang ẩn"}}</div>
                        </td>



                        <td >


                          <form class="form-check-inline"  method="post">

                         <button style="border: 0"style="border: 0"  > <a href="{{route('tuyendung.edit', $row->id_tuyendung)}}"  title="Sửa" class="btn btn-icon btn-primary"><i class="fa fa-eye" aria-hidden="true"></i> Sửa</a></button>
                        </form>
                        <form class="form-check-inline" action="{{route('tuyendung.destroy', $row->id_tuyendung)}}" method="POST">
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
