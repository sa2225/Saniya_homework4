<?php 
print "<h1>Find out length of the string </h1>";
$str1 = 'Saniya';
print '<br>';
echo strlen($str1);
echo'<hr>';
?>

<?php
print "<h1> Return part of a string </h1>";
$str2 = substr("candycrushsaga", 5, 3);
print '<br>';
echo $str2;
echo '<hr>';
?>

<?php
print "<h1> Search a string for any of a set of characters </h1>";
$str3 = 'I want to go to Disneyland';
print '<br>';
echo strpbrk($str3, 'lye');
echo'<hr>';
?>

<?php
print "<h1> Make a string uppercase </h1>";
$str4 = 'Keep your face to the sunshine and you cannot see a shadow.';
$str4 = strtoupper($str4);
echo $str4;
echo '<hr>';
?>



<?php
print "<h1>Wraps a string to a given number of characters </h1>";
$str5 = "I love my course very much.";
$str6= wordwrap($str5, 3, "<br/>\n", true);
echo "$str6";
echo '<hr>';


<?php
print "<h1> Calculate similarity in the strings </h1>";
$str7 = 'Professor';
$str8 = 'Prof'; 
print '<br>';
echo similar_text($str7, $str8 ) ;
echo '<hr>';
?>


<?php
print "<h1> Convert binary into hexadecimal </h1>";
$binary= "0101111";
$hexadecimal = dechex(bindec($binary));
echo $hexadecimal;
echo '<hr>';
?>

<?php
print "<h1>Convert a string into an array</h1>";
$str9 = 'My name is Saniya';
$array = str_split($str9);
print_r($array);
echo '<hr>';


<?php
print"<h1> Return a formatted string </h1>";
$str10 = '8';
$str11= 'box';
$str12 = 'There are %d strawberries in the %s';
echo sprintf($str10, $str11, $str12);
echo '<hr>';
?>


<?php
print" <h1> Format a number with grouped thousands </h1>";
$str13 = 16857898754332.45678990900;
$str14 = number_format($str13);
echo $str14;
echo '<hr>';