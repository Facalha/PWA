{{-- resources/views/home.blade.php --}}

@extends('layouts.app')

@section('content')

    <!-- Conteúdo Principal -->
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Bem-vindo ao Meu Projeto</h1>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    @livewire('home-component')
                </div>
            </div>
        </div>
        
    </div>

@endsection
