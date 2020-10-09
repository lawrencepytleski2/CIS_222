<h1>Homework 2</h1>

<?php

/**
 * @category   Homework 2
 * @package    CIS-222
 * @author     Lawrence Pytleski <ljpytleski@hawkmail.hfcc.edu>
 * @version    2020.09.20
 * @link       https://cislinux.hfcc.edu/~ljpytleski/cis222/homework2/index.php
 * @grade      9 / 10
 */

$students = ["Rick", "Lester", "Barry", "Harold", "Leon"];
$arrLength = count($students);

if( $students > 3 ){
    echo "We have enough students!<br><br>";
}

if( $students <= 3 ){
    echo "Not enough students!<br><br>";
}

$students = ["Rick", "Lester", "Barry", "Harold", "Leon"];
foreach( $students as $name ){
    echo "Student's name: " . "$name<br>";
}

?>

<?php

echo '<br><h3>POST EXAMPLE:</h3>';

if( !is_null($_POST) )
	var_dump($_POST);

?>

<link rel="stylesheet" href="style.css">

<form method="post" >
    <br>
	<label for="message" >Message:</label>
	<input type="text" id="message" name="message" >
    <input type="submit" value="Submit" >
</form>


