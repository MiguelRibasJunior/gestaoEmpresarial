@extends('layout.app')
@section('content')
    <x-slot name="title">Cadastro</x-slot>

    <div class="container mt-5">
        <h1 class="mb-4 text-center"> Formulário de Cadastro</h1>

        
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
                <label for="name" class="form-label">Nome:</label>
                <input type="text" id="name" name="name" class="form-control" required placeholder="Ex: Leandro Bona"
                    value="{{ old('name') }}">
            </div>
            <div class="mb-3">
                <label for="sobrenome" class="form-label">Sobrenome:</label>
                <input type="text" id="sobrenome" name="sobrenome" class="form-control" required placeholder="Ex: Silva"
                    value="{{ old('sobrenome') }}">
            </div>


            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" id="email" name="email" class="form-control" required
                    placeholder="Ex: LeandroBona@gmail.com" value="{{ old('email') }}">
            </div>

            <div class="mb-3">
                <label for="whatsapp" class="form-label">Número de telefone:</label>
                <input type="tel" id="whatsapp" name="whatsapp" class="form-control" required placeholder="Ex: 9xxxx-xxxx"
                    value="{{ old('whatsapp') }}">
            </div>

            <div class="mb-3">
                <label for="Cpf" class="form-label">CPF:</label>
                <input type="text" id="Cpf" name="Cpf" class="form-control" required placeholder="Ex: 123.456.789-00"
                    value="{{ old('Cpf') }}">
            </div>

            <div class="mb-3">
                <label for="cep" class="form-label">CEP:</label>
                <input type="text" id="cep" name="cep" class="form-control" placeholder="Ex: 01001-000"
                    onblur="buscarCep(this.value)">
            </div>

            <div class="mb-3">
                <label for="logradouro" class="form-label">Rua:</label>
                <input type="text" id="logradouro" name="logradouro" class="form-control">
            </div>

            <div class="mb-3">
                <label for="bairro" class="form-label">Bairro:</label>
                <input type="text" id="bairro" name="bairro" class="form-control">
            </div>

            <div class="mb-3">
                <label for="cidade" class="form-label">Cidade:</label>
                <input type="text" id="cidade" name="cidade" class="form-control">
            </div>

            <div class="mb-3">
                <label for="uf" class="form-label">Estado:</label>
                <input type="text" id="uf" name="uf" class="form-control">
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Senha:</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Confirmar Senha:</label>
                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control"
                    required>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-success px-4">Cadastrar</button>
            </div>

            <div class="text-center mt-3">
                <small>Já tem conta? <a href="{{ route('login') }}">Faça login aqui</a></small>
            </div>
        </form>
    </div>

    <script>
        function buscarCep(cep) {
            cep = cep.replace(/\D/g, ''); 

            // Valida se o CEP tem 8 dígitos
            if (cep.length !== 8) {
                alert('CEP inválido. Digite um CEP com 8 números.');
                limparCamposEndereco();
                return;
            }

            // Faz a requisição à API ViaCEP //
            fetch(`https://viacep.com.br/ws/${cep}/json/`)
                .then(res => res.json())
                .then(data => {
                    if (!data.erro) {
                        document.getElementById('logradouro').value = data.logradouro;
                        document.getElementById('bairro').value = data.bairro;
                        document.getElementById('cidade').value = data.localidade;
                        document.getElementById('uf').value = data.uf;
                    } else {
                        alert('CEP não encontrado!');
                        limparCamposEndereco();
                    }
                })
                .catch(() => {
                    alert('Erro ao consultar o CEP.');
                    limparCamposEndereco();
                });
        }

        
        function limparCamposEndereco() {
            document.getElementById('logradouro').value = '';
            document.getElementById('bairro').value = '';
            document.getElementById('cidade').value = '';
            document.getElementById('uf').value = '';
        }
    </script>

@endsection