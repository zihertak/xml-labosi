<?php
$xml = simplexml_load_file("ljubimci.xml") 
?>

<!DOCTYPE html>
<html lang="hr">
<head>
  <meta charset="UTF-8">
  <title>Popis kućnih ljubimaca</title>
  <style>
    table {
      border-collapse: collapse;
      width: 80%;
      margin: 20px auto;
    }
    th, td {
      border: 1px solid black;
      padding: 8px;
      text-align: center;
    }
    th {
      background-color: blue;
    }
  </style>
</head>
<body>

<h2 style="text-align: center;">Popis kućnih ljubimaca</h2>

<table>
  <tr>
    <th>ID</th>
    <th>Ime</th>
    <th>Vrsta</th>
    <th>Pasmina</th>
    <th>Starost</th>
    <th>Vlasnik</th>
    <th>Kontakt</th>
  </tr>

  <?php foreach ($xml->ljubimac as $ljubimac): ?>
    <tr>
      <td><?php echo $ljubimac['id']; ?></td>
      <td><?php echo $ljubimac->ime; ?></td>
      <td><?php echo $ljubimac->vrsta; ?></td>
      <td><?php echo $ljubimac->pasmina; ?></td>
      <td><?php echo $ljubimac->starost; ?></td>
      <td><?php echo $ljubimac->vlasnik->ime_vlasnika; ?></td>
      <td><?php echo $ljubimac->vlasnik->kontakt; ?></td>
    </tr>
  <?php endforeach; ?>

</table>

</body>
</html>
