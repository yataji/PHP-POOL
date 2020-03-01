<?php
if ($_POST["submit"] != "OK" || $_POST["passwd"] === "" || $_POST["login"] === "")
{
    echo "ERROR\n";
    return ;
}
else
{
    if (!file_exists("./../private"))
        mkdir ("./../private");
    if (file_exists("./../private/passwd"))
    {
        $donnes = unserialize(file_get_contents("./../private/passwd"));
        foreach($donnes as $check)
            if ($check["login"] == $_POST["login"])
            {
                echo "ERROR\n";
                return ;
            }
        $table = array("login" => $_POST["login"], "passwd" => hash("whirlpool", $_POST["passwd"]));
        $donnes[] = $table;
        file_put_contents("./../private/passwd", serialize($donnes));
        echo "OK\n";
        return ;
    }
    else
    {
    $table = array("login" => $_POST["login"], "passwd" => hash('whirlpool', $_POST["passwd"]));
    $donnes[] = $table;
    file_put_contents("./../private/passwd", serialize($donnes));
    echo "OK\n";
    return ;
    }
}
?>