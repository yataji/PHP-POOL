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
    sort($tab, SORT_STRING);
    return $tab;
}
function mysort($s1,$s2)
{
    $tab = "aAbBcCdDeEfFgGhHiIjJkKlLmMnNoOpPqQrRsStTuUvVwWxXyYzZ0123456789\"#$%&'()*+,-./:;< =>?@[\\]^_`";
    $i = 0;
    $s4 = $s2;
    $s3 = $s1;
    $s1 = strtolower($s1);
    $s2 = strtolower($s2);
    while($s1[$i] || $s2[$i])
    {
        if (!$s1[$i] || !$s2[$i])
            return (!$s1[$i] ? -1 : 1);
        if (strpos($tab,$s1[$i]) != strpos($tab,$s2[$i]))
            return (strpos($tab,$s1[$i]) < strpos($tab,$s2[$i]) ? -1 : 1);
        $i++;
    }
    $i = 0;
    while ($s3[$i] || $s4[$i])
    {
        if (strpos($tab,$s3[$i]) != strpos($tab,$s4[$i]))
            return (1);
        $i++;
    }
    return (0);
}

$i = 1;
$tab = array();
while($i <= $argc)
{
    $tab = array_merge($tab,ft_split($argv[$i]));
    $i++;
}
usort($tab,"mysort");
foreach($tab as $element)
{
    echo "$element\n";
}
?>