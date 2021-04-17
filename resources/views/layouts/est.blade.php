<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" href="{{asset ('/img/logo.ico')}}">
        <title>{{ config('app.name', 'Laravel') }} | @yield('title')</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="{{ mix('css/style.css') }}">
        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
        <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/js/adminlte.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">
        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{asset('/plugins/fontawesome-free/css/all.min.css')}}">
        <!-- icheck bootstrap -->
        <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css"')}}>
        <!-- Theme style -->
        <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
    </head>
    <body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            @livewire('navigation-menu')
                <!-- Left navbar links -->
                <ul class="navbar-nav bars-display">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars oragecol"></i></a>
                    </li>
                </ul>
                <!-- Right navbar links -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <img src="{{asset('/img/logo02.png')}}" alt="" class="mr-3" style="width:150px;">
                    </li>
                </ul>
            </nav><!-- /.navbar -->
            <!-- Main Sidebar Container -->
            <aside class="main-sidebar elevation-4 bluecol text-light">
                <!-- Sidebar -->
                <div class="sidebar bluecol">
                    <!-- Sidebar user (optional) -->
                    <div class="user-panel border-b1-orage mt-3 pb-3 mb-3" >
                        <div class="image border-1">
                            <img src="{{ Auth::user()->profile_photo_path }}" class="img-circle elevation-2" alt="{{ Auth::user()->name }} User Image" >
                        </div>
                        <div class="info" style="overflow:Initial !important;">
                            <a href="#" class="btn d-block text-light" data-toggle="modal" data-target="#modal-sm"><strong>{{ Auth::user()->name }}</strong></a>
                            <span class="text-secondary">Docente</span>
                        </div>
                    </div>
                    <!-- Sidebar -->
                    <!-- SidebarSearch Form -->
                    <div class="form-inline">
                    </div>
                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column pl-2 " data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                        with font-awesome or any other icon font library -->
                            <li class="nav-header">OPCIONES</li>
                            <li class="nav-item">
                                <a href="#" class="nav-link p-l5">
                                    <i class="nav-icon fas fa-copy text-light"></i>
                                    <p class="h5 text-light"><strong>Cursos</strong></p>
                                </a>
                            </li>
                            <hr class="border-b3-orage margin-rl">
                            <li class="nav-item">
                                <a href="#" class="nav-link p-l5">
                                    <i class="nav-icon fas fa-users text-light"></i>
                                    <p class="h5 text-light"><strong>Alumnos</strong></p>
                                </a>
                            </li>
                            <hr class="border-b3-orage margin-rl">
                            <li class="nav-item">
                                <a href="#" class="nav-link p-l5">
                                    <i class="nav-icon fas fa-edit text-light"></i>
                                    <p class="h5 text-light"><strong>Rubricas</strong></p>
                                </a>
                            </li>
                            <hr class="border-b3-orage margin-rl">
                        </ul>
                    </nav>
                    <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
            </aside>
            <div class="modal fade " id="modal-sm">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Cerrando Sesion</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Desea cerrar sesion&hellip;</p>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                            <button type="button" class="btn btn-primary" onclick="{{'logout'}}">Si</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>

                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
            <div class="content-wrapper ">
            {{ $slot }}
            </div>
        </div>
        <div class="font-sans text-gray-900 antialiased">


        </div>
            <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
    </body>
</html>

