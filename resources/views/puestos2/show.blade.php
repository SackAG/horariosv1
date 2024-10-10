@extends('layouts.app')

@section('template_title')
    {{ $puestos2->name ?? __('Show') . " " . __('Puestos2') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Puestos2</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('puestos2s.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre:</strong>
                                    {{ $puestos2->nombre }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Tipopuesto:</strong>
                                    {{ $puestos2->tipoPuesto }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
