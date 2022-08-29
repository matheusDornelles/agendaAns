<header>
<h3>Contatos</h3>
</header>
<div>
    <a href="index.php?menuop=cad-contato">Novo contato</a>
</div>
<div>
    <form action="index.php?menuop=contatos" method="post">
        <input type="text" name="txt_pesquisa">
        <input type="submit" value=Pesquisar>
    </form>
</div>
<table class="table table-bordered  table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome do grupo</th>
            <th>nomeContato</th>
            <th>email1</th>
            <th>email2</th>
            <th>telefone1</th>
            <th>telefone2</th>
            <th>Edição</th>
            <th>Excuir</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $txt_pesquisa = (isset($_POST["txt_pesquisa"]))?$_POST["txt_pesquisa"]:"";
        $sql = "SELECT * FROM tbContatos WHERE gruposContato LIKE '%{$txt_pesquisa}%' or idContato = '{$txt_pesquisa}'
     
        ";

        $rs  =  mysqli_query($conexao,$sql) or die ("Erro ao executar consulta." . mysqli_error($conexao));
        while($dados = mysqli_fetch_assoc($rs)){ 
        ?>

        <tr>
            <td><?=$dados["idContato"]          ?></td>
            <td><?=$dados["gruposContato"]      ?></td>
            <td><?=$dados["nomeContato"]        ?></td>
            <td><?=$dados["email1"]             ?></td>
            <td><?=$dados["email2"]             ?></td>
            <td><?=$dados["telefone1"]          ?></td>
            <td><?=$dados["telefone2"]          ?></td>
            <td><a href="index.php?menuop=editar-contato&idContato=<?=$dados["idContato"] ?>">Editar</td>
            <td><a href="index.php?menuop=excluir-contato&idContato=<?=$dados["idContato"] ?>">Excluir</td>
        </tr>
    <?php
        }
        ?> 
    </tbody>