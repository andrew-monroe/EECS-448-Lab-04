<html>
<head>
  <title>Purchase Receipt</title>
  
  <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
  $email = $_POST["email"];
  $password = $_POST["password"];

  $snuggie_quant = $_POST["snuggie"];
  $snuggie_price = 29.99;
  $gold_quant = $_POST["gold"];
  $gold_price = 2999.99;
  $lint_quant = $_POST["lint"];
  $lint_price = 0.99;

  $shipping = $_POST["shipping"];
  $shipping_name = [
    "free" => "Free 7-Day",
    "threeday" => "3-Day",
    "overnight" => "Overnight Express"
  ];
  $shipping_price = [
    "free" => 0.00,
    "threeday" => 5.00,
    "overnight" => 50.00,
  ];
?>

<?php
  echo "Hello " . $email . "!<br>";
  echo "This is your password: " . $password . "<br>";
?>

<h2> Purchase Receipt:</h2>

<table class="receipt">
  <thead>
    <tr>
      <th style="width:100px;"></th>
      <th style="width:100px;">Quantity</th>
      <th style="width:100px;">Unit Price</th>
      <th style="width:100px;">Subtotal</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>Snuggie</th>
      <td><?php echo $snuggie_quant; ?></td>
      <td><?php echo "$" . $snuggie_price; ?></td>
      <td><?php echo "$" . ($snuggie_price * $snuggie_quant);?></td>
    </tr>
    <tr>
      <th>Gold</th>
      <td><?php echo $gold_quant; ?></td>
      <td><?php echo "$" . $gold_price; ?></td>
      <td><?php echo "$" . ($gold_price * $gold_quant);?></td>
    </tr>
     <tr>
      <th>Lint</th>
      <td><?php echo $lint_quant; ?></td>
      <td><?php echo "$" . $lint_price; ?></td>
      <td><?php echo "$" . ($lint_price * $lint_quant);?></td>
    </tr>
    <tr>
      <th>Shipping</th>
      <td colspan="2"><?php echo $shipping_name[$shipping]; ?></td>
      <td><?php echo "$" . $shipping_price[$shipping]; ?>
    </tr>
    <tr>
      <th colspan="3">Total Cost</th>
      <th><?php echo "$" . (($snuggie_price * $snuggie_quant) + ($gold_price * $gold_quant) + ($lint_price * $lint_quant) + $shipping_price[$shipping]); ?></th>
    </tr>
  </tbody>
</table>
</body>
</html>
