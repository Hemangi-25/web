<?php
require_once 'config/dbase.php';
require_once 'config/functions.php';
$result = dispaly_data();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Records</title>
    <link rel="stylesheet" type="text/css" href="css/records.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" 
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css">
</head>
<body class=body>
<special-header></special-header>
<br><br><br><br>
<h2>RECENT CASES</h2>
<table class=content-table>
<thead>
<tr>
<td> DATE </td>
<td> CITY NAME </td>
<td> TYPE OF CRIME  </td>
<td> CASE DETAIL </td>
</tr>
</thead>
<tbody>
<tr>
<?php
while($row = mysqli_fetch_assoc($result))
{
?>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['cityname']; ?></td>
<td><?php echo $row['crime']; ?></td>
<td><?php echo $row['case']; ?></td>
</tr>
<?php
}
?>
</tbody>
</table>
</body>
    <special-footer></special-footer>
<script src="js/mainnavbarfooter.js"></script>
</html>
    