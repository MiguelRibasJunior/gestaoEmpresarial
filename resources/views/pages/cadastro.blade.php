@extends('layout.app')
@section('content')
    <x-slot name="title">Cadastro</x-slot>

    <div class="container mt-5">
        <h1 class="mb-4 text-center"> Formulário de Cadastro</h1>


        <!-- Mensagem de sucesso -->
        @if(session('success'))
            <div class="alert alert-success text-center">{{ session('success') }}</div>
        @endif

        <!-- Mensagem de erros -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('cadastro') }}" method="POST" enctype="multipart/form-data"
            class="p-4 bg-white rounded shadow-sm">
            @csrf

            <div class="mb-3">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" id="nome" name="nome" class="form-control" required placeholder="Ex: Leandro Bona"
                    value="{{ old('nome') }}">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" id="email" name="email" class="form-control" required
                    placeholder="Ex: LeandroBona@gmail.com" value="{{ old('email') }}">
            </div>

            <div class="mb-3">
                <label for="whatsapp" class="form-label">Número de telefone:</label>
                <input type="tel" id="whatsapp" name="whatsapp" class="form-control" required
                    placeholder="Ex: 9xxxx-xxxx" value="{{ old('whatsapp') }}">
            </div>

            <div class="mb-3">
                <label for="dataDeNascimento" class="form-label">Data de nascimento:</label>
                <input type="date" id="dataDeNascimento" name="dataDeNascimento" class="form-control"
                    value="{{ old('dataDeNascimento') }}">
            </div>

            <div class="mb-3">
                <label for="fotoDePerfil" class="form-label">Foto de Perfil:</label>
                <input type="file" id="fotoDePerfil" name="avatar" class="form-control">
            </div>

            <div class="mb-3">
                <label for="senha" class="form-label">Senha:</label>
                <input type="password" id="senha" name="senha" class="form-control" required>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-success px-4">Cadastrar</button>
            </div>

            <div class="text-center mt-3">
                <small>Já tem conta? <a href="{{ route('login') }}">Faça login aqui</a></small>
            </div>
        </form>
    </div>
@endsection