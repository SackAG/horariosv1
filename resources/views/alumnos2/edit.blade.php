@extends('plantillas/plantilla2')

{{-- CONTENIDO1 --}}
@section('contenido1')

    @include('alumnos/tablahtml')
    
@endsection


{{-- CONTENIDO2 --}}
@section('contenido2')
<h1>editamos</h1>
<form action="{{route('alumnos.update',$alumno->id)}}" method="POST">
    @csrf
    <div class="row mb-3">
      <label for="nombre" class="col-sm-3 col-form-label">Nombre</label>
      <div class="col-sm-9">
        <input type="String" class="form-control" id="nombre" name="Nombre" value="{{$alumno->Nombre}}">
      </div>
    </div>

    <div class="row mb-3">
        <label for="apellidoP" class="col-sm-3 col-form-label">Apellido Paterno</label>
        <div class="col-sm-9">
          <input type="string" class="form-control" id="apellidoP" name="apellidoP">
        </div>
      </div>

      <div class="row mb-3">
        <label for="email" class="col-sm-3 col-form-label">Email</label>
        <div class="col-sm-9">
          <input type="email" class="form-control" id="email" name="Email" value="{{$alumno->Email}}">
        </div>
      </div>
    <button type="submit" class="btn btn-primary">guardar</button>
    
  </form>

@endsection