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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
    <!-- Inicio Menu-->
    <?php
 include_once('menu.html');
?>
    <!-- Fim Menu-->
    <h1>Fale conosco</h1>

    <hr>
    <div class="container">
        <div class="row">
        <div class="col-sm-5 col-md-6">
        <img src=" imagens/email.jpg " widt=" 40px ">
        <p>contato@fullstackeletro.com</p>
</div>
    <div class="col-sm-5 offset-sm-2 col-md-6 offset-md-0">
        <img src="imagens/whats.jpg" widt="40px">
        <p>(11) 99999-9999</p>  
</div>
    </div>

<div clas="container">
<form method="post" action="">
<div class="form- group col-sm-6 col-md-5 col-lg-6">
        <label for="name">Nome</label>
            <input class="form-control" type="text" name="nome" style="width: 400px;">
</div>
<div class="form- group col-sm-6 col-md-5 col-lg-6">
            <label for="mensagem">Mensagem:</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rowa="3" style="width: 400px;" name="mensagem"></textarea>
</div>
<br>
        <input type="post" class="btn btn-danger" name="submit" value="Enviar">
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