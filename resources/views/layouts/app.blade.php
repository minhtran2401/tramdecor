<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> @yield('title') </title>
    <base href="{{asset('/')}}">


<!--zoomimage-->
<link rel="stylesheet" href="{{asset('cssBE')}}/bundles/chocolat/dist/css/chocolat.css">

<!--dropzone-->
<link rel="stylesheet" href="{{asset('cssBE')}}/bundles/dropzonejs/dropzone.css">

  <!--alert-->
  <link rel="stylesheet" href="{{asset('cssBE')}}/bundles/izitoast/css/iziToast.min.css">


 <!--modal-->
 <link rel="stylesheet" href="{{asset('cssBE')}}/bundles/prism/prism.css">

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
    <div id="app">
        {{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav> --}}

        <main class="">
            @yield('content')
        </main>
    </div>
    <script src="{{asset('cssBE')}}/js/jquery.magnific-popup.min.js"></script>
  <script src="{{asset('cssBE')}}/js/isotope.js"></script>
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

<!--alertfloat-->
<script src="{{asset('cssBE')}}/bundles/izitoast/js/iziToast.min.js"></script>
<script src="{{asset('cssBE')}}/js/page/toastr.js"></script>

<!--sweetalert-->
<script src="{{asset('cssBE')}}/bundles/sweetalert/sweetalert.min.js"></script>
<script src="{{asset('cssBE')}}/js/page/sweetalert.js"></script>

</body>
</html>
