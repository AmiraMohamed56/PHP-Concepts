<form action="calculator.php" method="post">
    First Number: <input type="number" name ="num1"> <br>
    second Number: <input type="number" name ="num2"> <br>
    operator: <input type="text" name ="op"> <br>
    <input type="submit">
</form>

<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$op = $_POST['op'];
if($op === "+")
{
    echo  $num1 + $num2;
}
elseif($op === "-")
{
    echo  $num1 - $num2;
}
elseif($op === "*")
{
    echo  $num1 * $num2;
}
elseif($op === "/")
{
    echo  $num1 / $num2;
}
else{
    echo "Invalid Operation !";
}


?>

