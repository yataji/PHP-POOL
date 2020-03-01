<?php
function ft_is_sort($tab)
{
    $str = array();
    $str = $tab;
    sort($str);
    while ($i < sizeof($tab))
    {
        if (strcmp($tab[$i], $str[$i]))
            return (0);
        $i++;
    }
    return (1);
}
?>
