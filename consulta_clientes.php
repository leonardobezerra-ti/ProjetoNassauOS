<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ordem de Seriços</title>
  <link rel="stylesheet" type="text/css" href="_css/index.css">
</head>
  
  </div>
<body>
  
</body>
</html>


<?php
  require 'conexao.php';  
    
  // criando tabela e cabeçalho de dados
  echo "<table borde=3>";
  echo "<tr>";
  echo "<th>Nome </th>";
  echo "<th>Telefone</th";
  echo "</tr>";

  //conectando banco de dados:
  $sql = "SELECT * FROM clientes";
  $qur = mysqli_query ($mysql,$sql) or die (mysqli_error($mysql));

  //obtendo os dados por meio de um loop while
 
  while($row = mysqli_fetch_array($qur)){
   
    echo "<tr>";
    echo "<td>".$row['nome']. "</td>";
    echo "<td>".$row['fone']. "</td>";
    echo "</tr>";
  }
  
  
  
  

  
   
  mysqli_close($mysql);
  echo"</table>";
  ?>
<a href="index.php"><button type="button">Voltar</button>
