<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
    <div class="container">
        <!-- Marca -->
        <a class="navbar-brand fw-bold" href="{{ route('home') }}">GestãoEmpresarial</a>

        <!-- Botão mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links -->
        <div id="navbarNav" class="collapse navbar-collapse">
            <!-- Itens alinhados à esquerda -->
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="{{ route('produtos') }}">Produtos</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">Sobre Nós</a></li>
            </ul>

            <!-- Itens alinhados à direita -->
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('cadastro') }}">Cadastro</a></li>
            </ul>
        </div>
    </div>
</nav>
