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
foreach ($argv as $str)
{
    $tab = array();
    if ($str != $argv[0] && $str == $argv[1])
    {
        $tab = ft_split($str);
        $i = 1;
        while ($i < sizeof($tab))
        {
            echo "$tab[$i] ";
            $i++;
        }
        echo "$tab[0]\n";
    }
}
?>