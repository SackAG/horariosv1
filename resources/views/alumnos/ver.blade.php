@extends('plantillas/plantilla2')

{{-- CONTENIDO1 --}}
@section('contenido1')

    @include('alumnos/tablahtml')
    
@endsection


{{-- CONTENIDO2 --}}
@section('contenido2')
<h1>VIENDO DATOS</h1>
<form action="{{route('alumnos.destroy')}}" method="POST">
    @csrf
    <div class="row mb-3">
      <label for="nombre" class="col-sm-3 col-form-label">Nombre</label>
      <div class="col-sm-9">
        <input type="String" class="form-control" id="nombre" name="nombre" disabled>
      </div>
    </div>

    <div class="row mb-3">
        <label for="apellidoP" class="col-sm-3 col-form-label">Apellido Paterno</label>
        <div class="col-sm-9">
          <input type="string" class="form-control" id="apellidoP" name="apellidoP" disabled>
        </div>
      </div>

      <div class="row mb-3">
        <label for="email" class="col-sm-3 col-form-label">Email</label>
        <div class="col-sm-9">
          <input type="email" class="form-control" id="email" name="email" disabled>
        </div>
      </div>
    <button type="submit" class="btn btn-primary">CONFIRMA LA ELIMINACION</button>
    <a href="{{route('alumnos.index')}}" class="btn border-t-neutral-400">ta seguro?</a>
    
  </form>

@endsection