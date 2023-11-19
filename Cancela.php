<?php
include_once('config.php');
$Marcado = 0;
if (isset($_POST['submits'])) {
    
   $id = $_POST['id_Agenda'];
   $Marcado = $_POST['Cancelar'];

    $sqlUpdate = "UPDATE Agenda SET Marcado = '$Marco' WHERE id_Agenda ='$id'";

    if ($conexao->connect_error) {
        die("Connection failed: " . $conexao->connect_error);
    }
    if ($conexao->query($sqlUpdate) === true) {
        echo "<script>alert('Agendamento Cancelado')
    javascript:window.location='tabela.php';
    </script>";
    } else {
        echo "Error UPDATE record: " . $conexao->error;
    }

    $conexao->close();
}
?>