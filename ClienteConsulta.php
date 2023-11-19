<?php
include_once('config.php');
$Marcado = 0;
if (isset($_POST['submits'])) {
    
   $id = $_POST['id_Agenda'];
   $Marcado = $_POST['Cancelar'];



   $result=$conexao->query($sqlSelect);    

    if($result -> num_rows > 0 )
    {
        while($dado = mysqli_fetch_assoc($result))
        {  
            $Marcado = $dado['Marcado'];
            
    
        }  
        


        
    }

    $sqlUpdate = "UPDATE Agenda SET Marcado = '$Marcado' WHERE id_Agenda ='$id'";

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




<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script type="text/javascript" src="/Javascript/consulta.js"></script>
    <link rel="stylesheet" href="css/Consulta.css">

    <title>Consulta Cliente</title>
</head>

<body>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script type="text/javascript" src="Javascript/consulta.js"></script>
    <div class="BoxCpf">
        <input type="search" class="form-control w-25" name="Cpf" id="Cpf">
        </button>
    </div>
    <div class="container">
        <div class="box">
            <form action="ClienteConsulta.php" method=" POST">
                <fieldset>
                    <legend><b></b>CONSULTAR<b></b></legend>
                    <br>
                    <div class="inputBox">
                        <label for="Nome" class="labelInput">Nome</label>
                        <input type="text" name="Nome" id="Nome" class="inputUser" required>
                        <br><br>
                        <div class="inputBox">
                            <label for="E_mail" class="labelInput">E-mail</label>
                            <input type="text" name="E_mail" id="E_mail" class="inputUser">
                            <br><br>
                            <div class="inputBox">
                                <label for="Telefone" class="labelInput">Telefone</label>
                                <input type="text" name="Telefone" id="Telefone" class="inputUser">
                            </div>
                            <br><br>
                            <div class="inputBox">
                                <label for="Tipo_Servico" class="labelInput">Tipo de Serviço</label>
                                <input type="text" name="Tipo_Servico" id="Tipo_Servico" class="inputUser">
                            </div>
                            <br><br>
                            <div class="DataHorario">
                                <label for="Data_Horario">Data - Horario</label>
                                <input type="datetime-local" name="Data_Horario" id="Horario">
                            </div>
                            <br><br>
                            <button name="Cancelar" type="submit" id="submits">Cancelar</button>
                </fieldset>
            </form>
        </div>
    </div>
</body>

</html>