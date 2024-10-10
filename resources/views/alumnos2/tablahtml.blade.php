@section('contenido1')
@isset($mensaje)
<p>{{$mensaje}}</p>
@endisset

<a href="{{route('alumnos.create')}}" class="btn button btn-dark" style="margin-bottom: 15px;" role="button">Insertar</a>
<div class="table-md">
    <H2>VISTA DOS</H2>
    <table class="table table-primary">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido Paterno</th>
                <th scope="col">Email</th>
                <th>EDITAR</th>
                <th>ELIMINAR</th>
                <th>VER</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($alumnos as $alumno)
                
                    <tr class="">
                <td scope="row">{{ $alumno->id }}</td>
                <td>{{ $alumno->Nombre }}</td>
                <td>{{ $alumno->Email }}</td>
                <td><a href="{{route('alumnos.edit',$alumno->id)}}" class="btn button btn-success">Editar</a></td>
                <td><a href="{{route('alumnos.ver')}}" class="btn button btn-danger">Eliminar</a></td>
                <td><a href="{{route('alumnos.ver')}}" class="btn button btn-primary">Ver</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>


</div>
@endsection