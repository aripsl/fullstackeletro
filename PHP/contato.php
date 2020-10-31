<?php 
$servername = "localhost";
$username = "root";
$password = "";
$database = "fullstack";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("A conexão ao BD falhou: " . mysqli_connect_error());
}

if(isset($_POST['nome']) && isset($_POST['mensagem'])){
$nome = $_POST['nome'];
$mensagem = $_POST['mensagem'];

$sql =  "insert into comentarios (nome, mensagem) values('$nome', '$mensagem')";
$result = $conn->query($sql);

}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Contato - Full Stack Eletro</title>
    <link rel="stylesheet" href="./CSS/estilo.css">
</head>

<body>
    <!-- Inicio Menu-->
    <?php
 include_once('menu.html');
?>
    <!-- Fim Menu-->
    <h1>Fale conosco</h1>

    <hr>
    <div class="contato">
        <img src=" imagens/email.jpg " widt=" 40px ">
        <p>contato@fullstackeletro.com</p>
        <br>
    </div>
    <div class="contato">
        <img src="imagens/whats.jpg" widt="40px">
        <p>(11) 99999-9999</p>
        <br>
    </div>

    <form method="post" action="">
        <label>
            <h4>Nome:</h4>
            <input type="text" name="nome" style="width: 400px;">
        </label>
        <label>
            <br>
            <h4>Mensagem:</h4>
            <textarea style="width: 400px;" name="mensagem"></textarea>
        </label>
        <br>
        <input type="submit" name="submit" value="Enviar">
    </form>

    <?php 

    $sql = "select * from comentarios";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        while($rows = $result->fetch_assoc()){
            echo "Data: ", $rows['data'], "<br>";
            echo "Nome: ", $rows['nome'], "<br>";
            echo "Mensagem: ", $rows['mensagem'], "<br>";
        }
        }     
        else{
    echo "Nenhum comentário feito!";
}
    ?>

    <br><br><br><br><br>

    <footer id=rodape>
        <p id="pagamento"><b>Formas de pagamento:</b></p>
        <img src="./imagens/formas de pagamento.jpg" alt="Formas de pagamento">
        <p>&copy;Recode Pro</p>

    </footer>
</body>

</html>