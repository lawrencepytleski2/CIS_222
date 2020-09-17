<?php

$students = ["Rick", "Lester", "Barry", "Harold", "Leon"];
$arrLength = $students //;

if( $students > 3 ){
    echo "We have enough students!<br><br>";
}

if( $students <= 3 ){
    echo "Not enough students!<br><br>";
}

$students = ["Rick", "Lester", "Barry", "Harold", "Leon"];
foreach( $students as $name ){
    echo "Student's name" . "$name<br>";
}

?>

<?php
var_dump($_POST);

echo '<br><br><h3>POST</h3>';

if($_POST && $_POST['status']){
    $status = $_POST['status'];

    echo 'You said: ' . $status;
}
?>

<form method="post" >

	<label for="message" >Message:</label>
	<input type="text" id="message" name="message" >

	<input type="submit" value="Send" >

</form>

