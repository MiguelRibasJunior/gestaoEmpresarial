@extends('layout.app')
@section('content')
    <x-slot name="title">Sobre Nós</x-slot>

    <div class="container my-5">
        
        <div class="text-center mb-5">
            <h1 class="display-4 fw-bold">Sobre Nós</h1>
            <p class="lead text-muted">
                Conheça nosso sistema de gestão empresarial e a equipe dedicada que está por trás dele.
            </p>
        </div>

        <div class="row mb-5">
            <div class="col-md-6 mb-4">
                <div class="card shadow-sm h-100 border-0">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">Nossa Missão</h5>
                        <p class="card-text text-muted">
                            Fornecer soluções de gestão empresarial simples, eficientes e confiáveis para facilitar o dia a dia das empresas.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card shadow-sm h-100 border-0">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">Nossos Valores</h5>
                        <p class="card-text text-muted">
                            Transparência, inovação, compromisso com os clientes e melhoria contínua em nossos serviços.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-5">
            <h2 class="fw-bold mb-3">Contato</h2>
            <p class="text-muted mb-1">Telefone: <b>47 98888-8888</b></p>
            <p class="text-muted">Email: <b>contato@gestaoempresarial.com</b></p>
        </div>
    </div>
@endsection
