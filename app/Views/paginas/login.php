    <title>Login</title>

    <!-- Bootstrap 5 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <!-- Font Awesome -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    >

    <style>
        body {
            min-height: 100vh;
            background-color: #ffffdf;
        }

        .lado-esquerdo {
            min-height: 100vh;
            background-color: #e8ed76;
        }

        .lado-direito {
            min-height: 100vh;
            background-color: #ffffdf;
        }

        .logo {
            width: 430px;
            max-width: 90%;
        }

        .login-container {
            max-width: 500px;
        }

        .login-box {
            background-color: #e7eaa0;
        }

        .titulo {
            font-size: 36px;
        }

        .btn-entrar {
            background-color: #efb923;
            border-color: #efb923;
            font-size: 18px;
            font-weight: bold;
        }

        .btn-entrar:hover {
            background-color: #dca913;
            border-color: #dca913;
        }

        .btn-criar {
            background-color: #ffffe9;
        }

        .linha {
            height: 6px;
            background-color: #111;
        }

        .busca {
            display: flex;
            gap: 10px; /* espaço entre os elementos */
        }

        .busca input {
            padding: 8px;
            font-size: 18px;
        }

        .busca button {
            padding: 8px;
            font-size: 18px;
        }
        
        .text-center {
            margin-top: 25px;
        }

        .seu-elemento {
            margin-top: 20px; /* Altere o valor conforme a distância desejada */
        }
        
        .icone {
            width: 20px;
        }

        @media (max-width: 768px) {
            .lado-esquerdo,
            .lado-direito {
                min-height: auto;
            }

            .titulo {
                font-size: 30px;
            }

            .login-container {
                max-width: 100%;
            }
        }
    </style>
</head>

<body>

    <div class="container-fluid p-0">

        <div class="row g-0 min-vh-100">

            <!-- =====================================
                 LADO ESQUERDO
            ====================================== -->

            <div
                class="col-lg-6 lado-esquerdo d-flex justify-content-center align-items-center p-4"
            >

                <div class="text-center">

                <img src="../public/img/logo.png" class="logo img-fluid" alt="Achou.IFRO">

                </div>

            </div>


            <!-- =====================================
                 LADO DIREITO
            ====================================== -->

            <div
                class="col-lg-6 lado-direito"
            >

                <!-- MENU SUPERIOR -->

                <div
                    class="d-flex justify-content-end align-items-center gap-4 p-4"
                >

                    <div class="d-flex align-items-center gap-2 small">

                        <i class="fa-regular fa-circle-question fs-5"></i>

                        <span>
                            Precisa de Ajuda?
                        </span>

                    </div>

                    <div class="d-flex align-items-center gap-2 small">

                        <i class="fa-solid fa-headset fs-5"></i>

                        <span>
                            Contato
                        </span>

                    </div>

                </div>


                <!-- ÁREA LOGIN -->

                <div class="container login-container px-4 mt-3">

                    <!-- TÍTULO -->

                    <h1 class="titulo fw-bold mb-1">
                        Bem-vindo de volta!
                    </h1>

                    <p class="mb-5">
                        Faça login para acessar o sistema de Achado e Perdido
                    </p>


                    <!-- CAIXA DO LOGIN -->

                    <div class="login-box p-4">

                        <form>

                            <!-- USUÁRIO -->

                            <div class="input-group mb-4">

                                <span class="input-group-text bg-white border-0">

                                    <i class="fa-solid fa-user"></i>

                                </span>

                                <input
                                    type="text"
                                    class="form-control border-0"
                                    placeholder="Digite sua matricula">
                            </div>

                            <!-- SENHA -->

                            <div class="input-group mb-2">

                                <span class="input-group-text bg-white border-0">

                                    <i class="fa-solid fa-lock"></i>

                                </span>

                                <input
                                    type="password"
                                    class="form-control border-0"
                                    id="senha"
                                    placeholder="Digite sua senha"
                                >

                                <button
                                    class="btn bg-white border-0"
                                    type="button"
                                    onclick="mostrarSenha()"
                                >

                                    <i
                                        class="fa-solid fa-eye"
                                        id="iconeSenha"
                                    ></i>

                                </button>

                            </div>


                            <!-- LEMBRAR / ESQUECI -->

                            <div
                                class="d-flex justify-content-between align-items-center small mb-4"
                            >

                                <div class="form-check">

                                    <input
                                        class="form-check-input"
                                        type="checkbox"
                                        id="lembrar"
                                    >

                                    <label
                                        class="form-check-label"
                                        for="lembrar"
                                    >
                                        Lembrar-me
                                    </label>

                                </div>

                                <a
                                    href="#"
                                    class="text-dark text-decoration-none"
                                >
                                    Esqueceu sua senha?
                                </a>

                            </div>


                            <!-- BOTÃO ENTRAR -->

                            <button
                                type="submit"
                                class="btn btn-entrar w-100 rounded-0"
                            >

                                <i class="fa-solid fa-circle-arrow-right me-1"></i>

                                Entrar

                            </button>

                        </form>


                        <!-- DIVISOR -->

                        <div
                            class="d-flex align-items-center gap-4 my-4"
                        >

                            <div class="linha flex-grow-1"></div>

                            <strong class="small">
                                ou
                            </strong>

                            <div class="linha flex-grow-1"></div>

                        </div>


                        <!-- CRIAR CONTA -->

                        <button
                            type="button"
                            class="btn btn-criar w-100 rounded-0 fw-bold"
                        >

                            <i class="fa-solid fa-user-plus me-1"></i>

                            <a href="<?=URL?>/paginas/cadastro"
                            class="btn btn-criar">

                                <i class="bi bi-person-plus-fill"></i>

                                Criar conta

                                

</a>

                        </button>

                    </div>


                    <!-- MENSAGEM DE SEGURANÇA -->

                    <div class="text-center small mt-4">

                        <i class="fa-solid fa-shield-halved me-1"></i>

                        Seus dados estao protegidos conosco.

                    </div>

                </div>

            </div>

        </div>

    </div>