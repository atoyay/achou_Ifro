<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>como funciona</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #ffffff;
            color: #17251e;
        }

        /* ================= CABEÇALHO ================= */

        header {
            height: 90px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 7%;
            background: #000000;
            border-bottom: 1px solid #eeeeee;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .logo-icon {
            width: 52px;
            height: 52px;
            border: 4px solid #000000;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 25px;
        }

        .logo h2 {
            color: #000000;
            font-size: 19px;
            line-height: 19px;
        }

        .logo p {
            color: #777;
            font-size: 10px;
            margin-top: 5px;
        }

        nav {
            display: flex;
            gap: 35px;
            align-items: center;
        }

        nav a {
            text-decoration: none;
            color: #222;
            font-size: 14px;
        }

        nav a:hover {
            color: #000000;
        }

        nav .ativo {
            color: #000000;
            font-weight: bold;
            border-bottom: 2px solid #000000;
            padding-bottom: 10px;
        }

        .botoes {
            display: flex;
            gap: 12px;
        }

        .entrar {
            text-decoration: none;
            color: #000000;
            border: 1px solid #000000;
            padding: 12px 25px;
            border-radius: 6px;
            font-weight: bold;
        }

        .cadastrar {
            text-decoration: none;
            color: black;
            background: #000000;
            padding: 12px 25px;
            border-radius: 6px;
            font-weight: bold;
        }

        /* ================= BANNER ================= */

        .banner {
            background: #FDFBD4;
            color: black;
            text-align: center;
            padding: 45px 20px;
        }

        .banner h1 {
            font-size: 38px;
            margin-bottom: 12px;
        }

        .banner p {
            font-size: 16px;
        }

        /* ================= COMO FUNCIONA ================= */

        .passos {
            width: 85%;
            margin: 45px auto;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 35px;
        }

        .passo {
            text-align: center;
            position: relative;
        }

        .numero {
            width: 45px;
            height: 45px;
            margin: 0 auto 18px;
            border-radius: 50%;
            background: #FDFBD4;
            color: black;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 20px;
            font-weight: bold;
        }

        .imagem {
            width: 100%;
            height: 170px;
            background: #f1f7f2;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 70px;
            margin-bottom: 20px;
        }

        .passo h2 {
            font-size: 19px;
            color: #111;
            margin-bottom: 12px;
        }

        .passo p {
            color: #555;
            line-height: 1.6;
            font-size: 14px;
        }

        /* ================= SEGURANÇA ================= */

        .seguranca {
            width: 70%;
            margin: 20px auto 45px;
            padding: 25px;
            background: #f0f7f1;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 20px;
        }

        .seguranca-icon {
            font-size: 55px;
            color: #075c35;
        }

        .seguranca h2 {
            color: #075c35;
            margin-bottom: 8px;
            font-size: 20px;
        }

        .seguranca p {
            color: #333;
            font-size: 14px;
            line-height: 1.6;
        }

        /* ================= RODAPÉ ================= */

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

<!-- ================= BANNER ================= -->

<section class="banner">

    <h1>
        Como funciona o Achou IFRO
    </h1>

    <p>
        Veja como é simples usar a plataforma Achados e Perdidos.
    </p>

</section>


<!-- ================= PASSOS ================= -->

<section class="passos">


    <!-- PASSO 1 -->

    <div class="passo">

        <div class="numero">
            1
        </div>

        <div class="imagem">
            💻
        </div>

        <h2>
            Procurar ou anunciar
        </h2>

        <p>
            Use a busca para encontrar algo que perdeu
            ou cadastre um objeto que você encontrou.
        </p>

    </div>


    <!-- PASSO 2 -->

    <div class="passo">

        <div class="numero">
            2
        </div>

        <div class="imagem">
            📢
        </div>

        <h2>
            Publicamos para ajudar
        </h2>

        <p>
            Seu anúncio será publicado em nossa
            plataforma para que mais pessoas possam ver.
        </p>

    </div>


    <!-- PASSO 3 -->

    <div class="passo">

        <div class="numero">
            3
        </div>

        <div class="imagem">
            💬
        </div>

        <h2>
            Entramos em contato
        </h2>

        <p>
            Quando houver um possível duvida ou sugestão,
            vocês poderão conversar pelo sistema
            com segurança.
        </p>

    </div>


    <!-- PASSO 4 -->

    <div class="passo">

        <div class="numero">
            4
        </div>

        <div class="imagem">
            🎁
        </div>

        <h2>
            Devolução
        </h2>

        <p>
            Combinem a devolução de forma segura
            e juntos fazemos a diferença!
        </p>

    </div>

</section>


<!-- ================= SEGURANÇA ================= -->

<section class="seguranca">

    <div class="seguranca-icon">
        🛡️
    </div>

    <div>

        <h2>
            Segurança em primeiro lugar
        </h2>

        <p>
            Não compartilhamos seus dados pessoais
            com terceiros.
            <br>
            Toda comunicação acontece dentro da plataforma.
        </p>

    </div>

</section>

</body>

</html>