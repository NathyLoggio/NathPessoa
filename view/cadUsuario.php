<!DOCTYPE html>

<?php
    require_once '../controller/CUsuario.php';
    $cadUsuario = new CUusuario();
    $listaUsers = $cadUsuario-> getUsuario();
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
            <option value="1">Perfil Acesso...</option>
            <option value="admin">Administrador</option>
            <option value="user">Usuário</option>
        </select>
        <br/><br/>
        <input type="text" name="usuario" placeholder="User Aqui...">
        <br/><br/>
        <input type="password" name="senha" placeholder="Senha Aqui..." minilength="8">
        <input type="submit" name="salvar" value="Salvar">
        <input type="reset" value="Limpar">
        <input type="button" value="Voltar"
                onclick="location.href='../index.php'">
        <input type="button" value="Lista Usuários"
        onclick="document.getElementById('lista').style.visibility='visible';">  

    </form>
    <div id="lista" style="visibility: hidden">
        <h2>Lista Usuarios</h2>
        <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome Usuario</th>
                        <th>Usuario</th>
                        <th>Funções</th>
                    </tr>
                
                </thead>
                <tbody>
                    <!-- <?php foreach ($listaUsers as $user): ?> -->
                    <tr>
                        <td> <?php  echo $user['idUsuario'] ?> </td>
                        <td> <?php  echo $user['nomeUsuario'] ?> </td>
                        <td> <?php  echo $user['usuario'] ?> </td>
                        <td>---</td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <input type="button" value="Ocultar lista"
            onclick="document.getElementById('lista').style.visibility='visible';">  
        </div>
    </body>
</html>
