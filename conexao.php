<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexao</title>
</head>
<body>
    <?php 
        $hostname = 'localhost';
        $senha= '';
        $dbname = 'formulario';
        $rota = 'root';
        $conect = new mysqli($hostname,$rota,$senha,$dbname);
    ?>
</body>
</html>