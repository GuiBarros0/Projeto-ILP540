<?php
if(!isset($_SESSION))
    session_start();

if(!isset($_SESSION["logado"]))
{
    session_start();
    header("Location:index.php");
}
?>
