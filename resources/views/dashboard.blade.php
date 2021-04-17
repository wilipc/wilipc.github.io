
@section('title', 'Alumnos/Grupo')
<x-doc-layout>
    <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col">
                        <ol class="breadcrumb float-sm-left">
                            <li class="breadcrumb-item h3  item-max" style="font-family:'Corbel', sans-serif;"><strong>Alumnos</strong></li>
                            <li class="breadcrumb-item h4 " style="font-family:'Corbel', sans-serif;"><strong>Curso 01</strong></li>
                            <li class="breadcrumb-item h4  active" style="font-family:'Corbel', sans-serif;"><strong>Grupo 01</strong></li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
            <hr class="border-b3-orage">
        </div>
    <!-- Main content -->
        <div class="content container-sm ">
            <div class="container-fluid ">
                <div class="row mb-2">
                    <div class="box-tools pull-right pl-4">
                        <div class="has-feedback">
                            <input type="text" class="form-control bg-plomo rounded-pill text-center input-sm " placeholder="Buscar Alumno...">
                            <span class="glyphicon glyphicon-search form-control-feedback"></span>
                        </div>
                    </div><!-- /.box-tools -->
                    <div class="col justify-content-end">
                        <ol class="flex float-sm-right">
                            <div class="space-x-8 sm:-my-px sm:ml-10 sm:flex">
                                <x-jet-nav-link class="border-b3-orage" style="color:#3f4079!important;" href="{{ route('home') }}" :active="request()->routeIs('home')">
                                    <strong class="pb-2.5"> {{ __('Lista de Alumnos') }}</strong>
                                </x-jet-nav-link>
                            </div>
                            <div class="space-x-8 sm:-my-px sm:ml-10 sm:flex">
                                <x-jet-nav-link class="border-b3-orage" style="color:#3f4079!important;" href="{{ route('home') }}" :active="request()->routeIs('home')">
                                    <strong class="pb-2.5"> {{ __('Crear grupos') }}</strong>
                                </x-jet-nav-link>
                            </div>
                            <div class="space-x-8 sm:-my-px sm:ml-10 sm:flex">
                                <x-jet-nav-link class="border-b3-orage" style="color:#3f4079!important;" href="{{ route('listagrupo') }}" :active="request()->routeIs('listagrupo')">
                                    <strong class="pb-2.5" hrf> {{ __('Listado de grupos') }}</strong>
                                </x-jet-nav-link>
                            </div>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </x-doc-layout>
