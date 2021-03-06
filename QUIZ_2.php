<?php
/**
 * q2.txt
 *
 * Quiz 2 for chapter 2.
 *
 * @category   Quiz
 * @package    Quiz 2
 * @author     Lawrence Pytleski <ljpytleski@hawkmail.hfcc.edu>
 * @version    2020.09.17
 * @grade       10 / 10
 */

// 2 pts
// 1. Suppose I have the following two variables setup inside a PHP file.
// Write any additional code needed to connect the strings and output their contents.
$name = "Keanu Reeves";
$sentence = " is my favorite actor.";
echo $name.$sentence;

// 2 / 3 pts
// 2. Assume the $name variable is already set to the string "Keanu Reeves"
// Write an echo statement using the concatenation operator to send output to the browser.
// Once complete, the data sent to the browser should look exactly like this....
// <p>The Keanu Reeves</p>
$name = "Keanu Reeves";
echo "<p>The" . "$name</p>";


// 2 pts
// 3. Define a constant called MOVIE_TITLE and set it to the following string.
// "The Matrix"

define("MOVIE_TITLE", "Bill & Ted's Excellent Adventure!");
echo MOVIE_TITLE;

// 3 pts
// 4. Define an array called $classes and populate it with strings containing the classes you have taken at HFC (at least 3 or 4).
//		Then use a foreach loop to step through that array and echo their contents, don't forget to format with <br> tags.

$classes = ["CIS 129", "CIS 130", "CIS 172", "CIS 222"];
foreach( $classes as $name ){
    echo "Class Name" . "$name<br>";
}

// +1 ex pts
// 5. List 2 more escape characters not used in the example below, and what they output when used.
// Example: "\$" will output a $.

\' will output a '.
\" will output a ".
