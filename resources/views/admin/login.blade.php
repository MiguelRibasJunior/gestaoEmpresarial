@extends('layout.app')
@section('content')
    <x-slot name="title">Login Admin</x-slot>

    <div class="d-flex justify-content-center align-items-center" style="min-height: 70vh;">
        <div class="card shadow-sm p-4" style="width: 400px;">
            <h3 class="card-title text-center mb-3">Login Administrativo</h3>

            <form action="{{ route('admin.dashboard') }}" method="GET">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="admin@empresa.com" required>
                </div>
                <div class="mb-3">
                    <label for="senha" class="form-label">Senha:</label>
                    <input type="password" id="senha" name="senha" class="form-control" placeholder="••••••" required>
                </div>
                <button type="submit" class="btn btn-danger w-100">Entrar</button>
            </form>
        </div>
    </div>
@endsection
