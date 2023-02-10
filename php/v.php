<?php
/*
$name="hi hello how r u saran";
$age=21;

echo "name is $name age is $age";
echo "<br>";

echo var_dump($name);
echo "<br>";
echo var_dump($age);
?>*/
/*
echo "str lenght is =".strlen($name);
echo "<br>";
echo str_word_count($name);
echo "<br>";
echo strrev($name);
echo "<br>";
echo str_replace("saran","abhi",$name);
echo "<br>";
*/
$a=10;
function variable()
{
   global $a;
   $a=99;
    echo $a;
    echo "<br>";
}

variable();
echo $a;
echo "<br>";
?>
