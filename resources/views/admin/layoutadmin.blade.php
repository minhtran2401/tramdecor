<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>@yield('pagetitle')</title>
<!--zoomimage-->
<link rel="stylesheet" href="{{asset('cssBE')}}/bundles/chocolat/dist/css/chocolat.css">

<!--dropzone-->
<link rel="stylesheet" href="{{asset('cssBE')}}/bundles/dropzonejs/dropzone.css">

  <!--alert-->
  <link rel="stylesheet" href="{{asset('cssBE')}}/bundles/izitoast/css/iziToast.min.css">




  <!--datepicker-->
  <link rel="stylesheet" href="{{asset('cssBE')}}/bundles/bootstrap-daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="{{asset('cssBE')}}/bundles/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
  <link rel="stylesheet" href="{{asset('cssBE')}}/bundles/select2/dist/css/select2.min.css">
  <link rel="stylesheet" href="{{asset('cssBE')}}/bundles/jquery-selectric/selectric.css">
  <link rel="stylesheet" href="{{asset('cssBE')}}/bundles/bootstrap-timepicker/css/bootstrap-timepicker.min.css">
  <link rel="stylesheet" href="{{asset('cssBE')}}/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">

  <!--editor-->
  <link rel="stylesheet" href="{{asset('cssBE')}}/bundles/summernote/summernote-bs4.css">
  <link rel="stylesheet" href="{{asset('cssBE')}}/codemirror/lib/codemirror.css">
  <link rel="stylesheet" href="{{asset('cssBE')}}/codemirror/theme/duotone-dark.css">
  <link rel="stylesheet" href="{{asset('cssBE')}}/jquery-selectric/selectric.css">

  <!--calendar-->
  <link rel="stylesheet" href="{{asset('cssBE')}}/css/app.min.css">
  <link rel="stylesheet" href="{{asset('cssBE')}}/bundles/datatables/datatables.min.css">
  <link rel="stylesheet" href="{{asset('cssBE')}}/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('cssBE')}}/css/style.css">
  <link rel="stylesheet" href="{{asset('cssBE')}}/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="{{asset('cssBE')}}/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='{{asset('cssBE')}}/img/favicon.ico' />
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar sticky">
        <div class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i data-feather="align-justify"></i></a></li>
            <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                <i data-feather="maximize"></i>
              </a></li>
            <li>
              <form class="form-inline mr-auto">
                <div class="search-element">
                  <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="200">
                  <button class="btn" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </form>
            </li>
          </ul>
        </div>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
              class="nav-link nav-link-lg message-toggle"><i data-feather="mail"></i>
              <span class="badge headerBadge1">
                6 </span> </a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
              <div class="dropdown-header">
                Messages
                <div class="float-right">
                  <a href="#">Mark All As Read</a>
                </div>
              </div>
              <div class="dropdown-list-content dropdown-list-message">
              </div>
              <div class="dropdown-footer text-center">
                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li>
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
              class="nav-link notification-toggle nav-link-lg"><i data-feather="bell" class="bell"></i>
            </a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
              <div class="dropdown-header">
                Notifications
                <div class="float-right">
                  <a href="#">Mark All As Read</a>
                </div>
              </div>
              <div class="dropdown-list-content dropdown-list-icons">
                <a href="#" class="dropdown-item dropdown-item-unread"> <span
                    class="dropdown-item-icon bg-primary text-white"> <i class="fas
												fa-code"></i>
                  </span> <span class="dropdown-item-desc"> Template update is
                    available now! <span class="time">2 Min
                      Ago</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-icon bg-info text-white"> <i class="far
												fa-user"></i>
                  </span> <span class="dropdown-item-desc"> <b>You</b> and <b>Dedik
                      Sugiharto</b> are now friends <span class="time">10 Hours
                      Ago</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-icon bg-success text-white"> <i
                      class="fas
												fa-check"></i>
                  </span> <span class="dropdown-item-desc"> <b>Kusnaedi</b> has
                    moved task <b>Fix bug header</b> to <b>Done</b> <span class="time">12
                      Hours
                      Ago</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-icon bg-danger text-white"> <i
                      class="fas fa-exclamation-triangle"></i>
                  </span> <span class="dropdown-item-desc"> Low disk space. Let's
                    clean it! <span class="time">17 Hours Ago</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-icon bg-info text-white"> <i class="fas
												fa-bell"></i>
                  </span> <span class="dropdown-item-desc"> Welcome to Otika
                    template! <span class="time">Yesterday</span>
                  </span>
                </a>
              </div>
              <div class="dropdown-footer text-center">
                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li>
          <li class="dropdown"><a href="#" data-toggle="dropdown"
              class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image" src="{{asset('cssBE')}}/img/users/{{ Auth::user()->avatar }}"
                class="user-img-radious-style"> <span class="d-sm-none d-lg-inline-block"></span></a>
            <div class="dropdown-menu dropdown-menu-right pullDown">
              <div class="dropdown-title">Hello {{ Auth::user()->name }}</div>
            <a href="" data-toggle="modal" data-target="#exampleModal" class="dropdown-item has-icon"> <i class="fa fa-lock" aria-hidden="true"></i> Change Password
              </a> 
              
              {{--<a href="timeline.html" class="dropdown-item has-icon"> <i class="fas fa-bolt"></i>
                Activities
              </a> <a href="#" class="dropdown-item has-icon"> <i class="fas fa-cog"></i>
                Settings
              </a> --}}
              <div class="dropdown-divider"></div>
              <a href="{{ route('logout') }}" class="dropdown-item has-icon text-danger"> <i class="fas fa-sign-out-alt"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>

      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="formModal"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="formModal">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form class="">
              <div class="form-group">
                <label>Username</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="fas fa-envelope"></i>
                    </div>
                  </div>
                  <input type="text" class="form-control" placeholder="Email" name="email">
                </div>
              </div>
              <div class="form-group">
                <label>Password</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="fas fa-lock"></i>
                    </div>
                  </div>
                  <input type="password" class="form-control" placeholder="Password" name="password">
                </div>
              </div>
              <div class="form-group mb-0">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" name="remember" class="custom-control-input" id="remember-me">
                  <label class="custom-control-label" for="remember-me">Remember Me</label>
                </div>
              </div>
              <button type="button" class="btn btn-primary m-t-15 waves-effect">XÁC NHẬN</button>
            </form>
          </div>
        </div>
      </div>
    </div>
        {{-- menu --}}
        

      <?=View::make('admin.leftmenu')?>


        {{-- menu --}}


      <!-- Main Content -->
      
            @yield('main')
            
            <div class="settingSidebar">
                <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
                </a>
                <div class="settingSidebar-body ps-container ps-theme-default">
                  <div class=" fade show active">
                    <div class="setting-panel-header">Setting Panel
                    </div>
                    <div class="p-15 border-bottom">
                      <h6 class="font-medium m-b-10">Select Layout</h6>
                      <div class="selectgroup layout-color w-50">
                        <label class="selectgroup-item">
                          <input type="radio" name="value" value="1" class="selectgroup-input-radio select-layout" checked>
                          <span class="selectgroup-button">Light</span>
                        </label>
                        <label class="selectgroup-item">
                          <input type="radio" name="value" value="2" class="selectgroup-input-radio select-layout">
                          <span class="selectgroup-button">Dark</span>
                        </label>
                      </div>
                    </div>
                    <div class="p-15 border-bottom">
                      <h6 class="font-medium m-b-10">Sidebar Color</h6>
                      <div class="selectgroup selectgroup-pills sidebar-color">
                        <label class="selectgroup-item">
                          <input type="radio" name="icon-input" value="1" class="selectgroup-input select-sidebar">
                          <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                            data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                        </label>
                        <label class="selectgroup-item">
                          <input type="radio" name="icon-input" value="2" class="selectgroup-input select-sidebar" checked>
                          <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                            data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
                        </label>
                      </div>
                    </div>
                    <div class="p-15 border-bottom">
                      <h6 class="font-medium m-b-10">Color Theme</h6>
                      <div class="theme-setting-options">
                        <ul class="choose-theme list-unstyled mb-0">
                          <li title="white" class="active">
                            <div class="white"></div>
                          </li>
                          <li title="cyan">
                            <div class="cyan"></div>
                          </li>
                          <li title="black">
                            <div class="black"></div>
                          </li>
                          <li title="purple">
                            <div class="purple"></div>
                          </li>
                          <li title="orange">
                            <div class="orange"></div>
                          </li>
                          <li title="green">
                            <div class="green"></div>
                          </li>
                          <li title="red">
                            <div class="red"></div>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="p-15 border-bottom">
                      <div class="theme-setting-options">
                        <label class="m-b-0">
                          <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                            id="mini_sidebar_setting">
                          <span class="custom-switch-indicator"></span>
                          <span class="control-label p-l-10">Mini Sidebar</span>
                        </label>
                      </div>
                    </div>
                    <div class="p-15 border-bottom">
                      <div class="theme-setting-options">
                        <label class="m-b-0">
                          <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                            id="sticky_header_setting">
                          <span class="custom-switch-indicator"></span>
                          <span class="control-label p-l-10">Sticky Header</span>
                        </label>
                      </div>
                    </div>
                    <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
                      <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                        <i class="fas fa-undo"></i> Restore Default
                      </a>
                    </div>
                  </div>
                </div>
              </div>
      <footer class="main-footer">
        <div class="footer-left " >
          <a href="#">TNM made with <span class=text-danger ><i class="fas fa-heart    "></i></span></a></a>
        </div>
        <div class="footer-right">
        </div>
      </footer>
    </div>
  </div>
  
  <script src="{{asset('assets')}}/js/jquery.magnific-popup.min.js"></script>
  <script src="{{asset('assets')}}/js/isotope.js"></script>
  <script src="{{asset('cssBE')}}/js/app.min.js"></script>
  <!--modal-->
  <script src="{{asset('cssBE')}}/bundles/prism/prism.js"></script>

  <!-- JS Libraies -->
  <script src="{{asset('cssBE')}}/bundles/datatables/datatables.min.js"></script>
  <script src="{{asset('cssBE')}}/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <script src="{{asset('cssBE')}}/bundles/jquery-ui/jquery-ui.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="{{asset('cssBE')}}/js/page/datatables.js"></script>
  <!-- Template JS File -->
  <script src="{{asset('cssBE')}}/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="{{asset('cssBE')}}/js/custom.js"></script>
  <!--editor-->
  <script src="{{asset('cssBE')}}/bundles/summernote/summernote-bs4.js"></script>
  <script src="{{asset('cssBE')}}/bundles/codemirror/lib/codemirror.js"></script>
  <script src="{{asset('cssBE')}}/bundles/codemirror/mode/javascript/javascript.js"></script>
  <script src="{{asset('cssBE')}}/bundles/jquery-selectric/jquery.selectric.min.js"></script>
  <script src="{{asset('cssBE')}}/bundles/ckeditor/ckeditor.js"></script>
  <script src="{{asset('cssBE')}}/js/page/ckeditor.js"></script>

  <!--datepicker-->

  <script src="{{asset('cssBE')}}/bundles/cleave-js/dist/cleave.min.js"></script>
  <script src="{{asset('cssBE')}}/bundles/cleave-js/dist/addons/cleave-phone.us.js"></script>
  <script src="{{asset('cssBE')}}/bundles/jquery-pwstrength/jquery.pwstrength.min.js"></script>
  <script src="{{asset('cssBE')}}/bundles/bootstrap-daterangepicker/daterangepicker.js"></script>
  <script src="{{asset('cssBE')}}/bundles/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
  <script src="{{asset('cssBE')}}/bundles/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
  <script src="{{asset('cssBE')}}/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
  <script src="{{asset('cssBE')}}/bundles/select2/dist/js/select2.full.min.js"></script>
  <script src="{{asset('cssBE')}}/bundles/jquery-selectric/jquery.selectric.min.js"></script>
  <script src="{{asset('cssBE')}}/js/page/forms-advanced-forms.js"></script>
  
<!--drozone-->
<script src="{{asset('cssBE')}}/bundles/dropzonejs/min/dropzone.min.js"></script>
<script src="{{asset('cssBE')}}/js/page/multiple-upload.js"></script>

<script src="{{asset('cssBE')}}/bundles/chocolat/dist/js/jquery.chocolat.min.js"></script>
<script src="{{asset('cssBE')}}/bundles/jquery-ui/jquery-ui.min.js"></script>




  @yield('jsc')
  <script type="text/javascript">


    $(document).ready(function() {

      $(".themdemo").click(function(){ 
          var html = $(".clonedemo").html();
          $(".incrementdemo").after(html);
      });

      $("body").on("click",".xoademo",function(){ 
          $(this).parents(".control-group").remove();
      });

    });

</script>

<script type="text/javascript">


  $(document).ready(function() {

    $(".themreal").click(function(){ 
        var html = $(".clonereal").html();
        $(".incrementreal").after(html);
    });

    $("body").on("click",".xoareal",function(){ 
        $(this).parents(".control-group").remove();
    });

  });

</script>

</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->
</html>