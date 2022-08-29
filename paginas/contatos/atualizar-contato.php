<header>
<h3>Atualizar Contato</h3>
</header>

<?php
    
    $idContato      = mysqli_real_escape_string($conexao, $_POST["idContato"]);
    $gruposContato  = mysqli_real_escape_string($conexao, $_POST["gruposContato"]);
    $nomeContato    = mysqli_real_escape_string($conexao, $_POST["nomeContato"]);
    $email1         = mysqli_real_escape_string($conexao, $_POST["email1"]);
    $email2         = mysqli_real_escape_string($conexao, $_POST["email2"]);
    $telefone1      = mysqli_real_escape_string($conexao, $_POST["telefone1"]);
    $telefone2      = mysqli_real_escape_string($conexao, $_POST["telefone2"]);

    $sql = "UPDATE tbcontatos SET
    idContato = '{$idContato}',
    gruposContato = '{$gruposContato}',
    nomeContato = '{$nomeContato}',
    email1 = '{$email1}',
    email2 = '{$email2}',
    telefone1 = '{$telefone1}',
    telefone2 = '{$telefone2}'
    WHERE idContato = '{$idContato}'
    "; 

    $rs  =  mysqli_query($conexao,$sql) or die ("Erro ao executar consulta." . mysqli_error($conexao));
    
    echo "registro atualizado com sucesso";
?>  