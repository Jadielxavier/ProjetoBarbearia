<?php

  include("config.php");
  $Cpf = filter_input(INPUT_GET, 'cpf');
  if (isset($Cpf)) {

    $sth = mysqli_query($conexao, "SELECT * FROM Agenda WHERE Cpf = " . $Cpf); //a query estava errada
    $rows = array();
    while($r = mysqli_fetch_assoc($sth)) {
      $rows[] = $r;
    }
    
    print json_encode($rows);

    $conexao->close();
  }
?>