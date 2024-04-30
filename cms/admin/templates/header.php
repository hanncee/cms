<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../../stlye.css">
</head>
<body>
<nav class="navbar navbar-light bg-dark p-4 w">
  <h1><a class="navbar-brand text-light fs-3" href="#">
    <span class="text-info">ART</span>ICLE.COM
  </a></h1>
  <div class="menu">
                    <a href="logout.php" class="btn btn-info">Logout</a>
                </div>
</nav>
    <div class="dashboard d-flex justify-content-between mr-5 w-100" >
        <div class="sidebar bg-dark vh-100 ">
        <div class="menu p-3 mt-3 text-center">
                    <a data-active="dashboard" href="index.php" class="text-light text-decoration-none"><strong>Dashboard</strong></a>
                </div>
            <div class="menues p-3 mt-4 text-center">
            <div class="menu">
                    <a data-active="about" href="about.php" class="text-light text-decoration-none"><strong>About</strong></a>
                </div>
                <div class="menu mt-5 text-center">
                    <a data-active="create" href="create.php" class="text-light text-decoration-none"><strong>Add New Post</strong></a>
                </div>
                <div class="menu mt-5 text-center">
                    <a data-active="view" href="../index.php" class="text-light text-decoration-none"><strong>View Website</strong></a>
                </div>
                
            </div>
        </div>

        