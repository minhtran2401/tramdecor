
           
@extends('admin.layoutadmin')

@section('pagetitle', 'DANH SÁCH BLOG ')
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
                    <li class="breadcrumb-item"><a href={{asset('dashboard')}}><i class="fas fa-tachometer-alt"></i> TRANG CHỦ</a></li>
                  <li class="breadcrumb-item"><a href="{{asset('blog')}}"><i class="far fa-file"></i> Blog</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-list"></i>Danh Sách Blog</li>
                  </ol>
                </nav>
                <div class="card">
                  
                  <div class="card-header">
                    <h4>DANH SÁCH BLOG</h4>
                    <a href="{{route('blog.create')}}"> <button class="btn btn-primary">
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
                            <th>Tên Blog </th>
                            <th  >Loại Blog  </th>
                            <th> Ngày Đăng</th>
                            <th>Hình Ảnh</th>
                            <th class="text-center" >Quản Lí</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($ds as $row)
                          <tr>
                            <td>
                              <div> {{ $row->id_blog}} </div> 
                               <div> {{ $row->Anhien==1? "Đang hiện " : "Đang ẩn"}}</div> 

                            </td>
                            <td>
                            <div>{{$row->name_blog}}</div>
                          
                      
                            </div>
                        </td>
                            <td class="align-middle">
                              <div>
                                <div>
                                  @php
                                  $id_loaiblog =$row->id_loaiblog;
                                  $tl = App\LoaiBlog::find($id_loaiblog);
                                  echo $tl->name_loaiblog;
                              @endphp</h5></div>
                            </td>
                            <td>
                               
                                {{date('d-m-Y ', strtotime($row->ngay_blog))
                              }}
                              </td>
                          
                            <td>
                              
                               
                                 
                                    <div class="chocolat-parent">
                                      <a href="{{asset('imgblog')}}/{{$row->hinh_blog}}" class="chocolat-image"  title="{{$row->name_blog}}">
                                        <div data-crop-image="75">
                                        <img alt="image" src="{{asset('imgblog')}}/{{$row->hinh_blog}}"  class="avatar avatar-xl">
                                        </div>
                                      </a>
                                    </div>
                               
                                
                            </td>
                            
                        <td  class="text-center">


                          <form class="form-check-inline" action="{{route('blog.edit', $row->id_blog)}}" >

                         <button style="border: 0" class="btn btn-icon btn-primary" >  <i class="fa fa-eye" aria-hidden="true"></i> Sửa</button>
                        </form>
                        <form class="form-check-inline" action="{{route('blog.destroy', $row->id_blog)}}" method="POST">
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