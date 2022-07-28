<!DOCTYPE html>

<?php
    require_once '../controller/CUsuario.php';
    $cadUsuario = new CUsuario();
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="pt-br">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuario</title>
</head>
<body>
    <h1>cadastro de usuario</h1>
    <form action="<?php $cadUsuario->inserir(); ?>" method="POST">
        <input type="text" name="nome" placeholder="Nome Aqui...">
        <br/><br/>
        <select name="perfilAcesso">
            <option value="">Selecione...</option>
            <option value="admin">Administrador</option>
            <option value="user">Usuário</option>
        </select>
        <br/><br/>
        <input type="text" name="usuario" placeholder="User Aqui...">
        <br/><br/>
        <input type="password" name="senha" placeholder="Senha Aqui..." minilength="8">
        <input type="submit" name="salvar" value="Salvar">
        <input type="reset" value="Limpar">
        <input type="button" value="Voltar" onclick="location.href='../index.php'">
        <input type="button" value="lista de usuario" onclick="location.href='listaUsuario.php'">
    </form>
    </body>
</html>
