@extends('layout.app')

@section('title', 'Produtos')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Produtos disponíveis</h2>
    <div class="row">
        @foreach($produtos as $produto)
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="{{ asset('storage/' . $produto->imagem) }}" class="card-img-top" alt="{{ $produto->nome }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $produto->nome }}</h5>
                    <p class="card-text">{{ Str::limit($produto->descricao, 100) }}</p>
                    <p><strong>Preço:</strong> R$ {{ number_format($produto->preco, 2, ',', '.') }}</p>
                    <a href="{{ route('produtos', $produto->id) }}" class="btn btn-primary">Ver detalhes</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection