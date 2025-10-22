@extends('layout.app')
@section('content')
    <x-slot name="title">Dashboard Admin</x-slot>

    <div class="container">
        <h1 class="mb-4">Painel Administrativo</h1>
        <p class="text-muted mb-4">Aqui você pode gerenciar clientes, produtos e outras funcionalidades do sistema.</p>

        <div class="row">
            <!-- Clientes -->
            <div class="col-md-4 mb-3">
                <div class="card shadow-sm h-100">
                    <div class="card-body d-flex flex-column text-center">
                        <h5 class="card-title">Clientes</h5>
                        <p class="card-text flex-grow-1">Visualize e gerencie os clientes cadastrados.</p>
                        <a href="{{ route('admin.clientes') }}" class="btn btn-outline-primary mt-auto">Ver Clientes</a>
                    </div>
                </div>
            </div>

            <!-- Produtos -->
            <div class="col-md-4 mb-3">
                <div class="card shadow-sm h-100">
                    <div class="card-body d-flex flex-column text-center">
                        <h5 class="card-title">Produtos</h5>
                        <p class="card-text flex-grow-1">Gerencie os produtos do sistema.</p>
                        <a href="{{ route('admin.products.create') }}" class="btn btn-outline-success mt-auto">Ver Produtos</a>
                    </div>
                </div>
            </div>

            <!-- talvez apagar depois -->
            <div class="col-md-4 mb-3">
                <div class="card shadow-sm h-100">
                    <div class="card-body d-flex flex-column text-center">
                        <h5 class="card-title">Relatórios</h5>
                        <p class="card-text flex-grow-1">Acesse relatórios do sistema.</p>
                        <a href="#" class="btn btn-outline-secondary mt-auto">Ver Relatórios</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection