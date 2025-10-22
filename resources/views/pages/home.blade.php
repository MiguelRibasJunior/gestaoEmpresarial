@extends('layout.app')

@section('title', 'Página Inicial')

@section('content')
    <section class="text-center">
        <h2 class="text-2xl font-bold mb-4">Bem-vindo ao Sistema de Gestão Empresarial</h2>
        <p class="text-gray-600 mb-5">Escolha uma opção para continuar:</p>

        <div class="row">
            <!-- Login -->
            <div class="col-md-3 mb-3">
                <div class="card shadow-sm h-100">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Login</h5>
                        <p class="card-text flex-grow-1">Acesse sua conta para gerenciar seus dados.</p>
                        <a href="{{ route('login') }}" class="btn btn-outline-primary mt-auto">Entrar</a>
                    </div>
                </div>
            </div>

            <!-- Login Admin -->
            <div class="col-md-3 mb-3">
                <div class="card shadow-sm h-100">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Login Admin</h5>
                        <p class="card-text flex-grow-1">Acesse o painel administrativo do sistema.</p>
                        <a href="{{ route('admin.login') }}" class="btn btn-outline-danger mt-auto">Entrar</a>
                    </div>
                </div>
            </div>

            <!-- Cadastro -->
            <div class="col-md-3 mb-3">
                <div class="card shadow-sm h-100">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Cadastro</h5>
                        <p class="card-text flex-grow-1">Crie sua conta para acessar o sistema.</p>
                        <a href="{{ route('cadastro') }}" class="btn btn-outline-warning mt-auto">Cadastrar</a>
                    </div>
                </div>
            </div>

            <!-- Produtos -->
            <div class="col-md-3 mb-3">
                <div class="card shadow-sm h-100">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Produtos</h5>
                        <p class="card-text flex-grow-1">Visualize e gerencie todos os produtos.</p>
                        <a href="{{ route('produtos') }}" class="btn btn-outline-success mt-auto">Ver mais</a>
                    </div>
                </div>
            </div>

            <!-- Sobre -->
            <div class="col-md-3 mb-3">
                <div class="card shadow-sm h-100">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Sobre Nós</h5>
                        <p class="card-text flex-grow-1">Saiba mais sobre o sistema e nossa equipe.</p>
                        <a href="{{ route('about') }}" class="btn btn-outline-secondary mt-auto">Ler mais</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection