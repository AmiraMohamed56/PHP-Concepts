<?php
echo "Hello world";
$name = "Amira";
echo "<h1>welcome $name to our website</h1>";
$age = 21;
echo "<h1>your age is: $age</h1>";

// working with strings

$stmt = "CIS Team MU";
echo strlen($stmt);
echo "<br>";

// arrays
$array = array("Amira", "Awad", "Aya");
echo $array[0];
echo "<br>";
$array[2] = "Mona";
echo $array[2];

// Assocative Array
$grades = ["Amira"=> "A+", "Awad"=>"A", "Aya"=>"A-"];
echo $grades["Amira"];
$grades["Aya"] = "B+";
echo $grades["Aya"];


?>



<form action="index.php" method="post">
    Apples: <input type=checkbox name= fruits[] value=apples >
    Oranges: <input type=checkbox name= fruits[] value=oranges >
    Banana: <input type=checkbox name= fruits[] value=banana >
    <input type="submit">
    
</form>

<?php 
echo "<pre>";
var_dump($_POST['fruits']);
echo "</pre";
?>    