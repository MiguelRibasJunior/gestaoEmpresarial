@extends('layout.app')

@section('title', $produto->nome)

@section('content')
<div class="container mt-4">
    <div class="card">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{ asset('storage/' . $produto->imagem) }}" class="img-fluid rounded-start" alt="{{ $produto->nome }}">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h3>{{ $produto->nome }}</h3>
                    <p>{{ $produto->descricao }}</p>
                    <h4>R$ {{ number_format($produto->preco, 2, ',', '.') }}</h4>
                    <a href="{{ route('produtos') }}" class="btn btn-secondary mt-3">Voltar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection