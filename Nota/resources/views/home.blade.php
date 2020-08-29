@extends('layouts.app')

@section('content')
<div class="container">
<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <!-- {{ __('Dashboard') }} -->
                    {{'Notas'}}
                </div>

                <div class="card-body">
                    <!-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }} -->
                    <a name="" id="" class="btn btn-primary" href="{{action('ProductsController@index')}}" role="button">Crear Nota</a>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <!-- {{ __('Dashboard') }} -->
                    {{'Notas'}}
                </div>

                <div class="card-body">
                    <!-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }} -->
                    <div class="row">
                    <a name="" id="" class="btn btn-primary" href="{{action('ProductsController@index')}}" role="button">Crear Nota</a>
                    </div>
                    <br>
                    <div class="row">
                    <a name="" id="" class="btn btn-primary" href="{{action('ProductsController@index')}}" role="button">Crear Nota</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection