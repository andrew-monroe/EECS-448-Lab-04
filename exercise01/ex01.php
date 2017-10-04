<head>
  <link rel="stylesheet" href="style.css">
</head>

<h1>100 x 100 Multiplication Table</h1>

<table>

<?php
  $size = 100;

  echo "<tr>";
  echo "<th style=\"background-color:black\"></th>";
  for ($i = 1; $i <= 100; $i++) {
    echo "<th>" . $i . "</th>";
  }
  echo "</tr>";

  for ($x = 1; $x <= $size; $x++) {
    echo "<tr>";
    echo "<th>" . $x . "</th>";
    for($y = 1; $y <= $size; $y++) {
      echo "<td>" . ($x * $y) . "</td>";
    }
    echo "</tr>";
  }
?>

</table>
