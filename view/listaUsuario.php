<?php
    require_once '../controller/CUsuario.php';
    $cadUsuario = new CUsuario();
    $listaUsuario = $cadUsuario->getUsuarios();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div id="lista" >
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
                     <?php foreach ($listaUsuario as $user): ?>
                    <tr>
                        <td> <?php  echo $user['idUsuario']; ?> </td>
                        <td> <?php  echo $user['nomeUsuario']; ?> </td>
                        <td> <?php  echo $user['usuario']; ?> </td>
                        <td><?php echo $user['perfilAcesso']; ?></td>
                        <td> 
                            <form action="editarUser.php" method="post">
                                <input type="hidden" name="idUsuario"
                                       value="<?php echo $user['idUsuario']; ?>">
                                <input type="submit" value="Editar" name="editar">
                            </form>

                            <form action="../controller/deletarUser.php" method="POST">
                                <input type="hidden" name="idUsuario"
                                       value="<?php echo $user['idUsuario']; ?>">
                                <input type="submit" value="Deletar" name="deletar">
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <input type="button" value="voltar ao cadastro" onclick="location.href='cadUsuario.php'">  
        </div>
    </body>
</html>