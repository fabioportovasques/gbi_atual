


<?php
session_start();
require 'config.php';



if (isset($_POST['email']) && !empty($_POST['email'])) {

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuarios WHERE email = :email AND senha = MD5(:senha)";
    $sql = $pdo->prepare($sql);
    $sql->bindValue(":email", $email);
    $sql->bindValue(":senha", $senha);
    $sql->execute();

    if ($sql->rowCount() > 0) {                                   //Se Houve Resultado...

        $sql = $sql->fetch();
        $id = $sql['id'];
        $nome = $sql['nome'];
        $ip = $SERVER['REMOTE_ADDR'];


        $_SESSION['lg'] = $id; 
        $_SESSION['nome'] = $nome;

        $sql = "UPDATE USUARIOS SET ip = :ip WHERE id = :id";
        $sql = $pdo->prepare($sql);
        $sql->bindValue(":ip", $ip);      
        $sql->bindValue(":id", $id);
        $sql->execute();

        

        header("Location: dashboard/dist/index.php");
        exit;

        

    } else {


        ?>
        <script>
            {
                alert("Usuário não encontrado");
                window.location="index.php";
            }
        </script>
        <?php 




     }

        

    }



?>