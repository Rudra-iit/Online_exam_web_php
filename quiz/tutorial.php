<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tutorial</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Quiz Tutorial</h2>
    <p>This tutorial explains how the quiz works and gives you some background information.</p>

    <table border="1" style="margin:20px auto; border-collapse:collapse;">
        <tr><th>Step</th><th>Description</th></tr>
        <tr><td>1</td><td>Read the question carefully.</td></tr>
        <tr><td>2</td><td>Select the best answer.</td></tr>
        <tr><td>3</td><td>Submit before the timer runs out.</td></tr>
    </table>

    <div style="text-align:center;">
        <img src="page_curve.png" alt="Tutorial Image" width="300">
    </div>

    <br>
    <a href="index.php">⬅ Back to Menu</a>
</body>
</html>