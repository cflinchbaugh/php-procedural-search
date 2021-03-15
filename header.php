
<?php
    include_once 'includes/dbh.php';
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Procedural login demo">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <link rel="stylesheet" href="styles.css">
    </head>


    <body>
        <header>
            <a href="index.php">Home</a>
        </header>
        <main>

        <form action="search.php" method="POST">
            <input type="text" name="search-value" placeholder="Search">
            <button type="submit" name="search-submit">Search</button>
        </form>