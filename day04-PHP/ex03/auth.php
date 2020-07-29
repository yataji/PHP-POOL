<?php
session_start();
function    auth($login, $passwd)
{
    if ($login === "" || $passwd === "")
    {
        echo "ERROR1\n";
        return ;
    }
    else
    {
        $donnes = unserialize(file_get_contents("../private/passwd"));
        foreach ($donnes as $check)
        {
            if ($check["login"] === $login && $check["passwd"] === hash("whirlpool", $passwd))
                return (TRUE);
        }
        return (FALSE);
    }
}
?>