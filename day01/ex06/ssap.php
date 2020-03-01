#!/usr/bin/php
<?php
function ft_split($str)
{
    $tab = array();
    $stdin = trim($str);
    $len = strlen($stdin);
    for ($i = 0; $i < $len; $i++)
    {
        while ($stdin[$i] == ' ' && $i < $len)
            $i++;
        $tmp = "";
        while ($stdin[$i] != ' ' && $i < $len)
        {
            $j = 0;
            $tmp .= $stdin[$i];
            $j++;
            $i++; 
        }
        $tab[] = $tmp;
    }
    return $tab;
}
$tab = array();
foreach ($argv as $str)
{
    if ($str != $argv[0])
        $tab = array_merge($tab,ft_split($str));
}
sort($tab, SORT_STRING);
foreach ($tab as $element)
    echo "$element\n";
?>
