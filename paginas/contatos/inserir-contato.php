<header>
<h3>inserir contato</h3>
</header>

<?php
    
    $gruposContato  = mysqli_real_escape_string($conexao, $_POST["gruposContato"]);
    $nomeContato    = mysqli_real_escape_string($conexao, $_POST["nomeContato"]);
    $email1         = mysqli_real_escape_string($conexao, $_POST["email1"]);
    $email2         = mysqli_real_escape_string($conexao, $_POST["email2"]);
    $telefone1      = mysqli_real_escape_string($conexao, $_POST["telefone1"]);
    $telefone2      = mysqli_real_escape_string($conexao, $_POST["telefone2"]);

    $sql = "INSERT INTO tbcontatos(
        
        gruposContato,
        nomeContato,
        email1,
        email2,
        telefone1,
        telefone2)
        VALUES(
            
            '{$gruposContato}',
            '{$nomeContato}',
            '{$email1}',
            '{$email2}',
            '{$telefone1}',
            '{$telefone2}'
        )
        ";
    $rs  =  mysqli_query($conexao,$sql) or die ("Erro ao executar consulta." . mysqli_error($conexao));
    
    echo "registro inserido com sucesso";
?>  