<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
    <div class="container">
        
        <a class="navbar-brand fw-bold" href="{{ route('home') }}">GestãoEmpresarial</a>

        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        
        <div id="navbarNav" class="collapse navbar-collapse">
            
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="{{ route('produtos') }}">Produtos</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">Sobre Nós</a></li>
            </ul>

            
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('cadastro') }}">Cadastro</a></li>
            </ul>
        </div>
    </div>
</nav>
