
           
@extends('admin.layoutadmin')

@section('pagetitle', 'DANH SÁCH DỰ ÁN ')
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
                  <li class="breadcrumb-item"><a href="{{'dashboard'}}"><i class="fas fa-tachometer-alt"></i> Home</a></li>
                  <li class="breadcrumb-item"><a href="{{'sanpham'}}"><i class="far fa-file"></i> Dự Án</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-list"></i> Danh Sách Dự Án</li>
                  </ol>
                </nav>
                <div class="card">
                  
                  <div class="card-header">
                    <h4>DANH SÁCH DỰ ÁN</h4>
                    <a href="{{route('sanpham.create')}}"> <button class="btn btn-primary">
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
                            <th>Tên <br> Loại </th>
                            <th style="width: 20%" >Vị Trí /<br> Diện Tích </th>
                            <th> Thời Gian <br> Phong Cách</th>
                           
                            <th>Hình Ảnh</th>
                            <th class="text-center" >Quản Lí</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($ds as $row)
                          <tr>
                            <td>
                              <div> {{ $row->id_page}} </div> 
                               <div> {{ $row->Anhien==1? "Đang hiện " : "Đang ẩn"}}</div> 

                            </td>
                            <td>
                            <div>{{$row->name_page}}</div>
                            <div>
                                @php
                                $id_dv =$row->id_dv;
                                $tl = App\DichVu::find($id_dv);
                                echo $tl->name_dv;
                            @endphp</h5></div>
                      
                            </div>
                        </td>
                            <td class="align-middle">
                              <div>
                              <div>{{$row->diadiem_page}}</div>
                              <div>{{$row->dientich_page}} </div>
                              </div>
                            </td>
                            <td>
                            <div>{{date('d-m-Y', strtotime($row->time_page))}}</div>
                                <div>{{$row->style_page}}</div>
                            </td>
                         
                            <td>
                                {{-- <img alt="image" src="{{asset('imgtemp')}}/{{$row->image}}" width="50"> --}}
                               
                                 
                                    <div class="chocolat-parent">
                                      <a href="{{asset('hinhduan')}}/{{$row->hinh_page_pri}}" class="chocolat-image"  title="{{$row->name}}">
                                        <div data-crop-image="75">
                                        <img alt="image" src="{{asset('hinhduan')}}/{{$row->hinh_page_pri}}"  class="avatar avatar-xl">
                                        </div>
                                      </a>
                                    </div>
                               
                                
                            </td>
                            
                        <td  class="text-center">


                          <form class="form-check-inline"  method="post">

                            <button style="border: 0"style="border: 0"  > <a href="{{route('sanpham.edit', $row->id_page)}}"  title="Sửa" class="btn btn-icon btn-primary"><i class="fa fa-eye" aria-hidden="true"></i> Sửa</a></button>
                           </form>
                        <form class="form-check-inline" action="{{route('sanpham.destroy', $row->id_page)}}" method="POST">
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