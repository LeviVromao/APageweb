<?php 
    include_once "conexao.php";
    $email = $_POST['email'];
    $telefone = $_POST['tel'];
    $verifica_telefone = mysqli_query($conect, "SELECT telefone FROM usuarios WHERE telefone = '$telefone' ");
    $verifica_email = mysqli_query($conect, "SELECT email FROM usuarios WHERE email = '$email' ");
    if(isset($_POST['submit']) && mysqli_num_rows($verifica_email) ==0 && mysqli_num_rows($verifica_telefone) ==0){
        $nome = $_POST['nome'];
        $nome_empresa=$_POST['empr'];
        $result = mysqli_query($conect, "INSERT INTO usuarios(nome,telefone,email,Nome_empresa) VALUES
        ('$nome','$telefone','$email','$nome_empresa')");
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem vindo à Ibridge!</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <header>
        <a href="index.html"><img src="img/image 1.png" alt="Logo da ibridge"></a>
    </header>
    <main>
        <div id="vindo">
        <?php     
        if (mysqli_num_rows($verifica_email)==0) {
            echo"<h4>Bem vindo à ibridge </h4>";
        } else{
            echo "Email ou telefone ja cadastrados";
        }
        ?>
        </div>
        <div id="balões">
            <img src="https://admin.binds.co/img/party.svg" alt="Balões">
        </div>      
         </div>
         <div id="vindo">
            <?php 
            if(mysqli_num_rows($verifica_email)==0){
                echo"<h4>Valide sua conta!</h4>";
            }else{
                echo"Retorne para cadastrar corretamente";
            }
            ?> 
        </div>
         <div id="email">
            <?php
            if (mysqli_num_rows($verifica_email)==0) {
                echo"<p>Enviaremos um email para definir sua senha.</p>";
            } else {
                echo"";
            }
            ?>
        </div>
        <div id="botao">
            <form action="index.html"> <input type="submit" value="Voltar"></form>
        </div> 
    </main>
</body>
</html>