@extends('layouts.app')
@include('plantillas.plantilla1')
@section('template_title')
    Puestos2S
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Puestos2S') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('puestos2s.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
									<th >Nombre</th>
									<th >Tipopuesto</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($puestos2s as $puestos2)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $puestos2->nombre }}</td>
										<td >{{ $puestos2->tipoPuesto }}</td>

                                            <td>
                                                <form action="{{ route('puestos2s.destroy', $puestos2->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('puestos2s.show', $puestos2->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('puestos2s.edit', $puestos2->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $puestos2s->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
