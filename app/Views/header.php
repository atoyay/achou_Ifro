<header class="bg-light">
    <div class="container">
        <nav class="navbar navbar-expand-sm navbar-warning position-relative">
            <a class="navbar-brand" href="#">Achou.IFRO</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Menu alinhado à esquerda -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?=URL?>" data-tooltip="tooltip" title="Página Inicial">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=URL?>/paginas/como_funciona" data-tooltip="tooltip" title="Como funciona">Como funciona</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=URL?>/paginas/cadastra_objeto" data-tooltip="tooltip" title="Cadastra Objeto">Cadastra Objeto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=URL?>/paginas/contato" data-tooltip="tooltip" title="Contato">Contato</a>
                    </li>
                </ul>
            </div>
            <!-- Botões alinhados à direita da tela -->
            <div class="position-absolute" style="right: 0;">
                <a class="btn btn-light mr-4" 
                href="<?=URL?>/paginas/cadastrar" data-tooltip="tooltip" title="Não tem uma conta? Cadastre-se">Entrar</a>
                <a class="btn btn-light" href="<?=URL?>/paginas/login" data-tooltip="tooltip" title="Tem uma conta? Faça login">Cadastrar</a>
            </div>
        </nav>
    </div>
</header>