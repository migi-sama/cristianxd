@extends('theme.layout')

@section('titulo')
    Crear Alergia
@endsection

@section('contenido')

<section class="content-header">
    <h1>
        <i class="fa fa-frown-o"></i>
        Registrar Alergia
    </h1>
    <ol class="breadcrumb">
        <li>
            <a href="/">
                <i class="fa fa-home"></i> Home
            </a>
        </li>
        <li>
            <a href="{{ route('alergia.index')}}">Alergia</a>
        </li>
        <li class="active">Registro</li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <div class="col-lg-12">
            @include('includes.form-error')
            <div class="box box-success">
                <div class="box-header with-border">
                </div>
                <form action="{{ route('alergia.store') }}" id="form-general" class="form-horizontal" method="POST">
                    @csrf
                    <div class="box-body">
                        <div class="form-group">
                            <label for="nombre" class="col-lg-3 control-label requerido">Nombre</label>
                            <div class="col-lg-8">
                              <input type="text" name="nombre" id="nombre" class="form-control" value="{{old('nombre')}}" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="descripcion" class="col-lg-3 control-label requerido">Descripción</label>
                            <div class="col-lg-8">
                              <input type="text" name="descripcion" id="descripcion" class="form-control" value="{{old('descripcion')}}" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="descripcion" class="col-lg-3 control-label requerido">Tipo</label>
                            <div class="col-lg-8">
                                <select name="tipoAlergia_id" id="tipoAlergia_id" class="form-control">
                                    <option value="">--Seleccione--</option>
                                    @foreach($tipos as $tipo)
                                        <option value="{{$tipo['id']}}"> {{$tipo['name']}} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="box-footer">
                            <div class="col-lg-3"></div>
                            <button type="reset" class="btn btn-default">Cancelar</button>
                            <button type="submit" class="btn btn-success">Guardar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection