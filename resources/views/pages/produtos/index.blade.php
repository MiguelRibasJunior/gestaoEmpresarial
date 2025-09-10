@extends('layout.app')
@section('title', 'Produtos')

@section('content')
    <h1 class="mb-4">Nossos Produtos</h1>

    <div class="row">
        @foreach($produtos as $produto)
            <div class="col-md-4 mb-3">
                @include('components.card-produto', [
                    'nome' => $produto['nome'],
                    'imagem' => $produto['imagem'],
                    'link' => route('produto.show', $produto['id'])
                ])
                </div>
        @endforeach
    </div>
@endsection