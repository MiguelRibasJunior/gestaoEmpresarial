@extends('layout.app')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4 text-center">Listagem de Clientes</h2>

    <table class="table table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Cep</th>
                <th>Cidade</th>
                <th>CPF</th>
                <th>Criado em</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($clientes as $cliente)
                <tr>
                    <td>{{ $cliente->id }}</td>
                    <td>{{ $cliente->name ?? '-' }}</td>
                    <td>{{ $cliente->email ?? '-' }}</td>
                    <td>{{ $cliente->whatsapp ?? '-' }}</td>
                    <td>{{ $cliente->cep ?? '-' }}</td>
                    <td>{{ $cliente->cidade ?? '-' }}</td>
                    <td>{{ $cliente->Cpf ?? '-' }}</td>
                    <td>{{ $cliente->created_at ? $cliente->created_at->format('d/m/Y H:i') : '-' }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center">Nenhum cliente cadastrado.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection