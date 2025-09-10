@extends('layout.app')
@section('title', $produto['nome'])

@section('content')
<div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
        <div class="col-md-4">
            <img src="{{ $produto['imagem'] }}" class="img-fluid rounded-start" alt="{{ $produto['nome'] }}">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">{{ $produto['nome'] }}</h5>
                <p><strong>Categoria:</strong> {{ $produto['categoria'] }}</p>
                <p><strong>Preço:</strong> R$ {{ $produto['preco'] }}</p>
                <p>{{ $produto['descricao'] }}</p>
                <a href="{{ route('produtos') }}" class="btn btn-secondary">Voltar para produtos</a>
            </div>
        </div>
    </div>
</div>
@endsection