@extends('layouts.admin')

@section('encabezado')
Nuevo Rol
@endsection

@section('contenido')

    {!!Form::open(array('url'=>'role','method'=>'POST','autocomplete'=>'on'))!!}
    {{Form::token()}}
<div class="row">
                <div class="col-lg-12">
                    <!-- Form Elements -->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        Ingrese los Datos del Role
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                          <div class="col-lg-6 col-lg-6 col-md-6 col-sm-6">
                    <div class="form-group">
                        <label for="nombre">Nombre del Rol</label>
                        <input type="text" name="name" required value="{{old('name')}}" class="form-control" placeholder="Ingrese Nombre del Rol">
                    </div>
                </div>
                <div class="col-lg-6 col-lg-6 col-md-6 col-sm-6">
                    <div class="form-group">
                        <label for="display_name">Nombre para Mostrar</label>
                        <input type="text" name="display_name" required value="{{old('display_name')}}" class="form-control" placeholder="Ingrese Nombre de Rol para Mostrar">
                        
                    </div>
                </div>
                <div class="col-lg-6 col-lg-6 col-md-6 col-sm-6">
                        <div class="form-group">
                        <label for="description">Descripción del Role</label>
                        <input type="text" name="description" required value="{{old('description')}}" class="form-control" placeholder="Descripción del Role">
                        </div>

                <div class="col-lg-6 col-lg-6 col-md-6 col-sm-6">
                    <div class="form-group">
                            <button class="btn btn-primary" type="submit">Guardar</button>
                            <button class="btn btn-danger" type="reset">Cancelar</button>
                </div>
  
                            </div>
                        </div>
                </div>
            </div></div></div>

    {!!Form::close()!!}
    
@endsection