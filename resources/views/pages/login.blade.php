@extends('layout.app')
@section('content')
    

    <div class="d-flex justify-content-center align-items-center" style="min-height: 70vh;">
        <div class="card shadow-sm p-4" style="width: 400px;">
            <h3 class="card-title text-center mb-4">Login de Usuário</h3>

            <form action="{{ route('login.store') }}" method="POST">
                @csrf

                <!-- Email !!-->
                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="exemplo@email.com" required>
                </div>

                <!-- Senha !!-->
                <div class="mb-3">
                    <label for="senha" class="form-label">Senha:</label>
                    <input type="password" id="senha" name="senha" class="form-control" placeholder="••••••" required>
                </div>

                
                <button type="submit" class="btn btn-primary w-100">Entrar</button>
            </form>

            
            <div class="mt-3 text-center">
                <a href="{{ route('cadastro') }}" class="text-decoration-none">Não tem conta? Cadastre-se</a>
            </div>
        </div>
    </div>
@endsection