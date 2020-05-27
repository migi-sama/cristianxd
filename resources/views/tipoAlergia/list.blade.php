@extends('theme.layout')

@section('contenido')

<section class="content-header">
    <h1>
        <i class="fa fa-heart"></i>
        Tipos de alergias
        <small>Lista</small>
    </h1>
    <ol class="breadcrumb">
        <li>
            <a href="/">
                <i class="fa fa-home"></i> Home
            </a>
        </li>
        <li class="active">Tipo de alergia</li>
    </ol>
</section>

@include('includes.mensaje')

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-4">
                    <div class="btn-agregar">
                        <a href="{{ route('tipoAlergia.create') }}" class="btn btn-success">
                            Agregar
                        </a>
                    </div> <!-- .boton -->
                </div> <!-- .col-md-4 -->
                <div class="col-md-8">
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group busqueda">
                            <input type="search" name="buscarpor" class="form-control" placeholder="Buscar por nombre" aria-label="Buscar"/>
                            <div class="input-group-btn">
                                <button class="btn btn-success btn-search" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div> <!-- /.input-group-btn -->
                        </div> <!-- /.input-group -->
                    </form>
                    <!-- /.search form -->
                </div> <!-- .col-md-8 -->
            </div> <!-- .row -->
            <hr class="raya w-100">
            <div class="box">
                <div class="box-body no-padding">
                    @if (count($tipos) >= 1)
                    <table class="table table-hover">
                        <thead class="bg-dark text-light">
                            <tr>
                                <th style="width: 10px">#</th>
                                <th style="width: 75%">Nombre</th>
                                <th colspan="2">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tipos ?? '' as $tipo)
                            <tr>
                                <td>{{ $tipo->id }}</td>
                                <td>{{ $tipo->name }}</td>
                                <td>
                                    <a href="{{ route('tipoAlergia.edit', $tipo->id) }}" class="btn btn-primary">
                                        <i class="fa fa-edit"></i>
                                        Editar
                                    </a>
                                </td>
                                <td>
                                    <form action="{{ route('tipoAlergia.destroy', $tipo->id) }}" method="post">
                                        {{ csrf_field() }}
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit" 
                                            onclick="return confirm('¿Está seguro de eliminarlo?')">
                                            <i class="fa fa-times" aria-hidden="true"></i>
                                            Eliminar
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {!! $tipos ?? ''->links() !!}
                    @else
                    <h2 class="text-center">
                        No hay registros aún.
                    </h2>
                    @endif
                </div><!-- /.box-body -->
            </div>
        </div>
    </div>
</section>

@endsection