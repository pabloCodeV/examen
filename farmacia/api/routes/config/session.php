<?php
session_start();
  if(!isset($_SESSION["token"]))
  header("Location:index.php");

  if(!isset($_COOKIE["token"]))
  header("Location: index.php");

  if($_SESSION["token"] !=  $_COOKIE["token"])
  header("Location: index.php");
