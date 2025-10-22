@extends('layout.app')

@section('title', 'Cadastrar Produto')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Cadastrar Novo Produto</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $erro)
                    <li>{{ $erro }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <textarea name="descricao" class="form-control" rows="4" required></textarea>
        </div>

        <div class="mb-3">
            <label for="preco" class="form-label">Preço</label>
            <input type="number" name="preco" step="0.01" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="imagem" class="form-label">Imagem</label>
            <input type="file" name="imagem" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Cadastrar</button>
        <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">Voltar</a>
    </form>
</div>
@endsection