<?php
// understanding the logic!!
// 1 ruble = 0.013 dollars
// 1 pound sterling = 1.28 dollars 
// 1 canadian dollar = .79 dollars 
// 1 euro = 1.18 dollars 
// 1 yen = .0094 dollars 

//rubles
$rubles = 1007;
$rubles *= 0.013;
$friendly_rubles = number_format($rubles, 2);

//pounds
$pounds = 500;
$pounds *= 1.28;
$friendly_pounds = number_format($pounds, 2);

//canadian dollars
$canadians = 5000;
$canadians *= .79;
$friendly_canadians = number_format($canadians, 2);

//euros
$euros = 1200;
$euros *= 1.18;
$friendly_euros = number_format($euros, 2);

//yens
$yens = 2000;
$yens *= .0094;
$friendly_yens = number_format($yens, 2);

//total
$total = $yens + $euros + $canadians + $pounds + $rubles;
$friendly_total = number_format($total, 2);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency</title>
    <style>
    table{
        width:400px;
        margin:20px auto;
        border:1px solid green;
        border-collapse:collapse;
    }

    td, th{
        border:1px solid green;
        padding:5px;
        text-align:left;
    }

    </style>
</head>

<body>
<table>

<tr>
<th>Rubles</th>
<td><?php echo '$ '.$friendly_rubles.''; ?></td>
</tr>

<tr>
<th>Pounds</th>
<td><?php echo '$ '.$friendly_pounds.''; ?></td>
</tr>

<tr>
<th>Canadians</th>
<td><?php echo '$ '.$friendly_canadians.''; ?></td>
</tr>

<tr>
<th>Euros</th>
<td><?php echo '$ '.$friendly_euros.''; ?></td>
</tr>

<tr>
<th>Yens</th>
<td><?php echo '$ '.$friendly_yens.''; ?></td>
</tr>

<tr>
<th>Total</th>
<td><strong><?php echo '$ '.$friendly_total.''; ?></strong></td>
</tr>

</table>

</body>
</html>