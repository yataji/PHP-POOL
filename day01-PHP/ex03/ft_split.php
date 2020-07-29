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
?>
