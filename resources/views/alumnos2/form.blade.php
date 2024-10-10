@extends('plantillas/plantilla2')
<h2>VISTA DOS</h2>
{{-- CONTENIDO1 --}}
@section('contenido1')

    @include('alumnos2/tablahtml')
    
@endsection
{{-- CONTENIDO2 --}}
@section('contenido2')
<h1>insertando</h1>
@if ($accion=='C')
<form action="{{route('alumnos.store',$alumno->id)}}" method="POST">
@elseif($accion=='E')
<form action="{{route('alumnos.update',$alumno->id)}}" method="POST">
  @elseif ($accion=='D')
  <form action="{{route('alumnos.destroy')}}" method="POST">
  @endif
    @csrf
    <div class="row mb-3">
      <label for="nombre" class="col-sm-3 col-form-label">Nombre</label>
      <div class="col-sm-9">
        <input type="String" class="form-control" id="Nombre" name="Nombre" value="{{old('Nombre',$alumno->Nombre)}}">
        @if ($errors->has('Nombre'))
    <span class="error">{{ $errors->first('Nombre') }}</span>
@endif
@error('Nombre')
  <p class="text-danger">Error en:{{$message}}</p>
@enderror
      </div>
    </div>

    {{-- <div class="row mb-3">
        <label for="apellidoP" class="col-sm-3 col-form-label">Apellido Paterno</label>
        <div class="col-sm-9">
          <input type="string" class="form-control" id="apellidoP" name="apellidoP">
        </div>
      </div> --}}

      <div class="row mb-3">
        <label for="email" class="col-sm-3 col-form-label">Email</label>
        <div class="col-sm-9">
          <input type="email" class="form-control" id="Email" name="Email" value='{{old('Email',$alumno->Email)}}'>
          @if ($errors->has('Email'))
    <span class="error">{{ $errors->first('Email') }}</span>
@endif
        </div>
      </div>
    <button type="submit" class="btn btn-primary">{{$txtbtn}}</button>
    
  </form>

@endsection