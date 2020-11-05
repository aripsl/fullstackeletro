<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Nossas lojas - Full Stack Eletro</title>
    <link rel="stylesheet" href="./CSS/estilo.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
    <!-- Inicio Menu-->
    <?php
 include_once('menu.html');
?>
    <br>
    <!-- Fim Menu-->

    <main>
    <div class="container">
        <h1>
            Nossas lojas
        </h1>
        <hr>
        <section style="text-align: center;">

            <div class="lojas">
                <h3 class="descrição">Rio de Janeiro</h3>
                <p class="descrição">Avenida Paulista, 985</p>
                <p class="descrição">10º andar</p>
                <p class="descrição">Centro</p>
                <p class="descrição">(21) 3333-3333</p>
            </div>

            <div class="lojas">
                <h3 class="descrição">São Paulo</h3>
                <p class="descrição">Avenida Presidente Vargas, 5000</p>
                <p class="descrição">3º andar</p>
                <p class="descrição">Jardins</p>
                <p class="descrição">(11) 44444-4444</p>
            </div>

            <div class="lojas">
                <h3 class="descrição">Santa Catarina</h3>
                <p class="descrição">Rua Major Ávila, 370</p>
                <p class="descrição">Vila Mariana</p>
                <p class="descrição">(47) 5555-5555</p>
                <br>
            </div>
</section>
</div>
            <br><br><br><br><br>

            <footer id=rodape>
                <p id="pagamento"><b>Formas de pagamento:</b></p>
                <img src="./imagens/formas de pagamento.jpg" alt="Formas de pagamento">
                <p>&copy;Recode Pro</p>

            </footer>
</body>

</html>