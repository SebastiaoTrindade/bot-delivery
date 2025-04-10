<?php
    require_once('conn.php');
    //print_r($_REQUEST);
?>

<?php

    $nome_cliente = $_POST['nome']; 
    $senha_cliente= $_POST['senha'];
    $email_cliente = $_POST['email'];

    // Usuario tipo 1 = Cliente
    // Usuario tipo 2 = Administrador


    // Busca o email do cliente no banco
    $busca_email= "SELECT * FROM login WHERE email = '$email_cliente'";
    $resultado_busca = mysqli_query($conn, $busca_email);
    $total_clientes = mysqli_num_rows($resultado_busca);

    echo $total_clientes;

    // Verificação de email
    if($total_clientes > 0){
        //echo "<script>alert('Email já cadastrado!');</script>";
        //echo "<script>window.location.href='cadastro.php';</script>";
        //exit();
        echo "<meta http-equiv='refresh' content='0;url=email_ja_cadastrado.php'>";
    }else{
        $sql = "INSERT INTO login (nome, senha, email, tipo) VALUES ('$nome_cliente', '$senha_cliente', '$email_cliente', '1')";
        $query = mysqli_query($conn, $sql);
        
        if(!$query){
            echo "<meta http-equiv='refresh' content='0;url=erro_cadastro.php'>";
        }else{
            echo "<meta http-equiv='refresh' content='0;url=sucesso.php'>";
        }
    }
// Conexão com o banco de dados
?>
