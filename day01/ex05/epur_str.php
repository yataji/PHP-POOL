#!/usr/bin/php
<?php
$argv[1] = trim($argv[1], " ");
$len = strlen($argv[1]);
while ($i < $len)
{
    while ($argv[1][$i] == ' ' && $argv[1][$i + 1] == ' ')
        $i++;
    if ($argv[1][$i] == ' ' && $argv[1][$i + 1] != ' ')
    {
        echo $argv[1][$i];
        $i++;
    }
    else
    {
        echo $argv[1][$i];
        $i++;
    }
}
echo "\n";
?>