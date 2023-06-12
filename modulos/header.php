<?php session_start(); 
  if (!isset($_SESSION['usuario'])) {
    header("location:index.php");
  }
?>

<!doctype html>
<html lang="ar" dir="rtl">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css" integrity="sha384-PJsj/BTMqILvmcej7ulplguok8ag4xFTPryRq8xevL7eBYSmpXKcbNVuy+P0RMgq" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/css/menu.css">
    <link rel="stylesheet" href="../public/css/estilos.css">
    <link rel="stylesheet" href="../public/librerias/fontawesome-free-6.4.0-web/css/all.css">
    <link rel="stylesheet" href="../public/librerias/datatables/datatables.css">

    <title>SIE</title>
  </head>
  <body style="background-color: #f8f9fa;">