<?php 
$servername = "localhost";
$username = "root";
$password = "";
$database = "fullstack";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("A conexão ao BD falhou: " . mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Produtos - Full Stack Eletro</title>
    <link rel="stylesheet" href="./CSS/estilo.css">
    <script src="./javascript/funcoes.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


<body>
    <!-- Inicio Menu-->
    <?php
 include_once('menu.html');
?>
    <!-- Fim Menu-->
    <div class="container">

    <header>
        <h1>Produtos</h1>
    </header>
    <hr>
    

    <div id="alinhado">
        <section class="categorias">
            <h2>Categorias</h2>
            <ul>
                <li onclick="exibir_todos()">Todos(12)</li>
                <li onclick="exibir_categoria('geladeira')">Geladeiras(3)</li>
                <li onclick="exibir_categoria('fogoes')">Fogões(2)</li>
                <li onclick="exibir_categoria('microondas')">Microondas(3)</li>
                <li onclick="exibir_categoria('lavadoraderoupas')">Lavadora de roupas(2)</li>
                <li onclick="exibir_categoria('lavalouca')">Lava-louças(2)</li>
            </ul>
        </section>


        <section class="produtos">
            <?php
        
$sql = "select * from produtos";
$result = $conn->query($sql);

if($result->num_rows > 0){
    while($rows = $result->fetch_assoc()){
        
        ?>
            <div class="boxproduto" id="<?php echo $rows ["categoria"]; ?>">
                <img src=<?php echo $rows ["imagem"]; ?> width="120px" onclick="destaque(this)">
                <br>
                <p class="descricao"><?php echo $rows ["descricao"]; ?></p>
                <hr>
                <p class="descricao"><strike>R$ <?php echo $rows ["preco"]; ?></strike></p>
                <p class="preco">R$ <?php echo $rows ["precofinal"]; ?></p>
                <br>
            </div>

            <?php

    }


} else{
    echo "Nenhum produto cadastrado!";
}


?>
</div>

        </section>
    
    </div>

    <footer id=rodape>
        <p id="pagamento"><b>Formas de pagamento:</b></p>
        <img src="./imagens/formas de pagamento.jpg" alt="Formas de pagamento">
        <p>&copy;Recode Pro</p>

    </footer>
    

</body>

</html>