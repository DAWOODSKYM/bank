<?php
session_start();
if(!isset($_SESSION["names"]))
{
    header("location:login.php");
}

