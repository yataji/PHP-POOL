<?php
session_start();
if ($_GET["submit"] === "OK")
{
    $_SESSION["login"] = $_GET["login"];
    $_SESSION["passwd"] = $_GET["passwd"];
}
?>
<html>
    <head>
        <style>
            body
            {
                background-color: #545f94;
            }
            div
            {
                color: black;
                margin-right: 20%;
                margin-top: 10%;
                text-align: center;
            }
            .in
            {
                margin-left: 22%;
                margin-top: -2.8%;
            }
            .ok
            {
                margin-top: 0%;
                margin-left: 22%;
                width: 10%;
            }
        </style>
    </head>
<body>
<div>
<form action="index.php" method="GET">
    <p>login:</p>
    <input class="in" type="text" name="login" value="<?=$_SESSION['login']?>"><br>
    <p>passwd:</p>
    <input class="in" type="password" name="passwd" value="<?=$_SESSION['passwd']?>"><br>
    <input class="ok" type="submit" name="submit" value="OK">
</form>
</div>
</body>
</html>