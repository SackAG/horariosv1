@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Puestos2
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Puestos2</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('puestos2s.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('puestos2.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
