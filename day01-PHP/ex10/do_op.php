#!/usr/bin/php
<?php
if ($argc != 4)
    {
        echo "Incorrect Parameters\n";
        return 0;
    }
        $num1 = intval(trim($argv[1]));
        $op = intval(trim($argv[2]));
        $num2 = intval(trim($argv[3]));
        if ($op == "+")
        echo ($num1 + $num2)."\n";
        elseif ($op == "-")
        echo $num1 - $num2."\n";
        elseif ($op == "/")
        echo $num1 / $num2."\n";
        elseif ($op == "*")
        echo $num1 * $num2."\n";
        elseif ($op == "%")
        echo $num1 % $num2."\n";
?>