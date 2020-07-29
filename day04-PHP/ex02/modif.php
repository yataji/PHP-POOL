<?php
if ($_POST["login"] === "" || $_POST["oldpw"] === "" || $_POST["newpw"] === "" || $_POST["submit"] != "OK")
{
    echo "ERROR\n";
    return ;
}
else
{
    if (!file_exists("./../private"))
    {
        echo "ERROR\n";
        return ;
    }
    if (file_exists("./../private/passwd"))
    {
        $i = 0;
        $donnes = unserialize(file_get_contents("./../private/passwd"));
        foreach ($donnes as $check)
        {
            if (($check["login"] === $_POST["login"]) && $check["passwd"] === hash("whirlpool", $_POST["oldpw"]))
            {
                $donnes[$i]["passwd"] = hash("whirlpool", $_POST["newpw"]);
                print_r($donnes["passwd"]);
                file_put_contents("./../private/passwd", serialize($donnes));
                echo "OK\n";
                return ;
            }
            $i++;
        }
    }
    echo "ERROR\n";
}
?>