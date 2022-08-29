<?php
$idContato = $_GET["idContato"];
$sql = "SELECT * FROM tbcontatos WHERE idContato = {$idContato}"; 
$rs  = mysqli_query($conexao,$sql) or die ("Erro ao recuperar os dados" . mysqli_error($conexao));
$dados = mysqli_fetch_assoc($rs);
?>
<header>
    <h3>Editar Contato</h3>
<header>
<div>
    <form action="index.php?menuop=atualizar-contato" method="post">
        
        <div>
            <label for="idContato">Id</label>
            <input type="text" name="idContato" value="<?=$dados["idContato"]?>">
        </div>
        <div>
            <label for="gruposContato">Grupo</label>
            <input type="text" name="gruposContato" value="<?=$dados["gruposContato"]?>">
        </div>
        <div>
            <label for="nomeContato">Nome</label>
            <input type="text" name="nomeContato" value="<?=$dados["nomeContato"]?>">
        </div>
        <div>
            <label for="email1">Email1</label>
            <input type="text" name="email1" value="<?=$dados["email1"]?>">
        </div>
        <div>
            <label for="email2">Email2</label>
            <input type="text" name="email2" value="<?=$dados["email2"]?>">
        </div>
        <div>
            <label for="telefone1">Telefone1</label>
            <input type="text" name="telefone1" value="<?=$dados["telefone1"]?>">
        </div>
        <div>
            <label for="telefone2">Telefone2</label>
            <input type="text" name="telefone2" value="<?=$dados["telefone2"]?>">
        </div>
        <input type="submit" value="Atualizar" name="btnAtualizar">
<div>
