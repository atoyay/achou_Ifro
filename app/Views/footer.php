<footer>
    <style>
        
        /* RODAPÉ*/

        footer {
            background: #ffee8c;
            color: black;
            padding: 40px 7% 20px;
        }

        .footer-conteudo {
            display: grid;
            grid-template-columns: 1.5fr 1fr 1fr 1.5fr;
            gap: 50px;
        }

        footer h3 {
            margin-bottom: 18px;
            font-size: 16px;
        }

        footer p,
        footer a {
            display: block;
            color: #000000;
            text-decoration: none;
            font-size: 13px;
            margin-bottom: 10px;
        }

        footer a:hover {
            color: white;
        }

        .redes {
            display: flex;
            gap: 12px;
            margin-top: 18px;
        }

        .rede {
            width: 32px;
            height: 32px;
            border: 1px solid white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .copyright {
            border-top: 1px solid #fefe18;
            margin-top: 30px;
            padding-top: 18px;
            text-align: center;
            color: #000000;
            font-size: 12px;
        }

        /* ================= RESPONSIVO ================= */

        @media (max-width: 1000px) {

            header {
                padding: 15px 3%;
            }

            nav {
                gap: 15px;
            }

            .passos {
                width: 90%;
                grid-template-columns: repeat(2, 1fr);
            }

            .seguranca {
                width: 90%;
            }

        }

    </style>

    <div class="footer-conteudo">


        <!-- LOGO -->

        <div>

            <h3>
                🔍 Achou.ifro<br>
            </h3>

            <p>
                Conectando você ao que importa.
            </p>

            <div class="redes">

                <div class="rede">
                    <i class="bi bi-instagram"></i>
                </div>

                <div class="rede">
                    <i class="bi bi-whatsapp"></i>
                </div>

                <div class="rede">
                    <i class="bi bi-envelope"></i>
                </div>

            </div>

        </div>


        <!-- NAVEGAÇÃO -->

        <div>

            <h3>
                Navegação
            </h3>

            <a href="index.php">
                Início
            </a>

            <a href="como_funciona.php">
                Como funciona
            </a>

            <a href="cadastrar_objeto.php">
                Cadastrar objeto
            </a>

            <a href="contato.php">
                Contato
            </a>

        </div>


        <!-- AJUDA -->

        <div>

            <h3>
                Ajuda
            </h3>

            <a href="#">
                Perguntas frequentes
            </a>

            <a href="#">
                Termos de uso
            </a>

            <a href="#">
                Política de privacidade
            </a>

        </div>


        <!-- CONTATO -->

        <div>

            <h3>
                Contato
            </h3>

            <p>
                achou@ifro.edu.br
            </p>

            <p>
                ☎ (69) 984555-5555
            </p>

            <p>
                📍 Campus Guajará-Mirim - RO
            </p>

        </div>

    </div>


    <div class="copyright">

        © <?php echo date("Y"); ?>
        Achou.ifro.
        Todos os direitos reservados.

    </div>

</footer>

</body>

</html>