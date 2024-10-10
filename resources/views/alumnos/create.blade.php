@extends('plantillas/plantilla2')

{{-- CONTENIDO1 --}}
@section('contenido1')

    @include('alumnos/tablahtml')
    
@endsection
{{-- CONTENIDO2 --}}
@section('contenido2')
<h1>insertando</h1>
<form action="{{route('alumnos.store')}}" method="POST">
    @csrf
    <div class="row mb-3">
      <label for="nombre" class="col-sm-3 col-form-label">Nombre</label>
      <div class="col-sm-9">
        <input type="String" class="form-control" id="Nombre" name="Nombre">
        @if ($errors->has('Nombre'))
    <span class="error">{{ $errors->first('Nombre') }}</span>
@endif
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
          <input type="email" class="form-control" id="Email" name="Email">
          @if ($errors->has('Email'))
    <span class="error">{{ $errors->first('Email') }}</span>
@endif
        </div>
      </div>
    <button type="submit" class="btn btn-primary">Grabar</button>
    
  </form>

@endsection