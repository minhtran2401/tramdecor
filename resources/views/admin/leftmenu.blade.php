<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
      <a href="{{asset('dashboard')}}"> <img alt="image" src="{{asset('cssBE')}}/img/logo.png" style="padding:2%" class="header-logo" />
            {{-- <span class="logo-name">TNM</span> --}}
            <span> <h6 class="title" style="font-size: 0.5rem" >{{ Auth::user()->name }} </h6></span>
            <span> <h6 class="title" style="font-size: 0.5rem" >{{ Auth::user()->idgroup==1? "Admin " : "Hacker" }}     <a  href="{{ route('logout') }}"> <i class="fas fa-power-off text-danger" alt="Đăng xuất" ></i> </a></h6></span>


        </a>
      </div>
      <ul class="sidebar-menu">
        <li class="menu-header">MAIN</li>
        <li class="dropdown  {{ request()->is('dashboard') ? 'active' : '' }}">
        <a href="{{asset('dashboard')}}" class="nav-link"><i  data-feather="monitor"></i><span>Trang Chủ</span></a>
        </li>



        <li class="dropdown {{ request()->is('dichvu','dichvu/*/edit','dichvu/create') ? 'active' : '' }}">
        <a href="{{route('dichvu.index')}}" class="menu-toggle nav-link has-dropdown"><i
                data-feather="layers"></i><span>DỊCH VỤ</span></a>
            <ul class="dropdown-menu active">
              <li><a class="nav-link" href="{{route('dichvu.index')}}"><i
                data-feather="list"></i> Danh Sách Dịch Vụ </a></li>
            <li><a class="nav-link" href="{{route('dichvu.create')}}"><i
              data-feather="plus-square"></i> Thêm Dịch Vụ </a></li>
            </ul>
          </li>

          <li class="dropdown   {{ request()->is('sanpham','sanpham/*/edit','sanpham/create') ? 'active' : '' }}">
            <a href="{{route('sanpham.index')}}" class="menu-toggle nav-link has-dropdown"><i
                data-feather="layout"></i><span>TRANG DỰ ÁN</span></a>
            <ul class="dropdown-menu ">
              <li><a class="nav-link" href="{{route('sanpham.index')}}"><i
                data-feather="list"></i> Danh Sách DỰ ÁN </a></li>
            <li><a class="nav-link" href="{{route('sanpham.create')}}"><i
              data-feather="plus-square"></i> Thêm DỰ ÁN Mới </a></li>
            </ul>
          </li>

          <li class="dropdown {{ request()->is('loaiblog','loaiblog/*/edit','loaiblog/create') ? 'active' : '' }}">
            <a href="{{route('loaiblog.index')}}" class="menu-toggle nav-link has-dropdown"><i
                data-feather="bold"></i><span>LOẠI BLOGS</span></a>
            <ul class="dropdown-menu">
              <li><a class="nav-link" href="{{route('loaiblog.index')}}"><i
                data-feather="list"></i> Thế Loại Blogs </a></li>
            <li><a class="nav-link" href="{{route('loaiblog.create')}}"><i
              data-feather="plus-square"></i> Thêm Loại Mới </a></li>
            </ul>
          </li>

          <li class="dropdown {{ request()->is('blog','blog/*/edit', 'blog/create') ? 'active' : '' }}">
            <a href="{{route('blog.index')}}" class="menu-toggle nav-link has-dropdown"><i
                data-feather="edit-2"></i><span> BLOGS</span></a>
            <ul class="dropdown-menu">
              <li><a class="nav-link" href="{{route('blog.index')}}"><i
                data-feather="list"></i> Danh Sách Blogs </a></li>
            <li><a class="nav-link" href="{{route('blog.create')}}"><i
              data-feather="plus-square"></i> Thêm Blog Mới </a></li>
            </ul>
          </li>


          <li class="dropdown {{ request()->is('tuyendung','tuyendung/*/edit','tuyendung/create') ? 'active' : '' }}">
          <a href="{{route('tuyendung.index')}}" class="menu-toggle nav-link has-dropdown"><i
                data-feather="bell"></i><span>TIN TUYỂN DỤNG</span></a>
            <ul class="dropdown-menu">
              <li><a class="nav-link" href="{{route('tuyendung.index')}}"><i
                data-feather="list"></i> Danh Sách Tin </a></li>
            <li><a class="nav-link" href="{{route('tuyendung.create')}}"><i
              data-feather="plus-square"></i> Tuyển Vị Trí Mới </a></li>
            </ul>
          </li>

          <li class="dropdown  {{ request()->is('nhanvien','nhanvien/*/edit', 'nhanvien/create') ? 'active' : '' }}">
            <a href="{{route('nhanvien.index')}}" class="menu-toggle nav-link has-dropdown"><i
                data-feather="user"></i><span>NHÂN VIÊN CTY</span></a>
            <ul class="dropdown-menu">
              <li><a class="nav-link" href="{{route('nhanvien.index')}}"><i
                data-feather="list"></i> Danh Sách NV </a></li>
            <li><a class="nav-link" href="{{route('nhanvien.create')}}"><i
              data-feather="plus-square"></i> Thêm Người Mới </a></li>
            </ul>
          </li>

          <li class="dropdown  {{ request()->is('danhgia','danhgia/*/edit', 'danhgia/create') ? 'active' : '' }}">
            <a href="{{route('danhgia.index')}}" class="menu-toggle nav-link has-dropdown"><i
                data-feather="message-circle"></i><span>Ý KIẾN KHÁCH HÀNG</span></a>
            <ul class="dropdown-menu">
              <li><a class="nav-link" href="{{route('danhgia.index')}}"><i
                data-feather="list"></i> Danh Sách  </a></li>
            <li><a class="nav-link" href="{{route('danhgia.store')}}"><i
              data-feather="plus-square"></i> Thêm Ý Kiến </a></li>
            </ul>
          </li>



         
     

    </aside>
  </div>
