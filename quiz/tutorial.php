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

    <h3>Conics:</h3>
    </p>When a plane intersects a cone, the border line at the intersection point is called a conic. </p>
    <p>There are 4 types of conics: circle, ellipse, parabola, hyperbola. </p>
    <p>The ratio between a conic's focus-border point distance and border point-directrix distance is equal, which is called eccentricity. </p>
    <p>Eccentricity is 0 for a circle, 1 for a parabola, less than 1 for an ellipse, and greater than 1 for a hyperbola. </p>
    <div style="text-align:center;">
        <img src="Conic-Sections.jpg" alt="Tutorial Image" width="300">
    </div>

    <h3>Calculus:</h3>
    <p>The ratio of change in a function is called differential. The integral of a function is the sum of an area bound by a graph. </p>
    <div style="text-align:center;">
        <img src="calculus.jpg" alt="Tutorial Image" width="300">
    </div>

    <h3>Combinatorics:</h3>
    <p>The number of possible ordered sequences of p objects from n is its permutation. Its formula is n!/(n-p)! </p>
    <p>The number of possible unordered sequences of p objects from n is its combination. Formula: n!/p!(n-p)! </p>
    <p>The number of possible unrepeated arrangements of n objects is n! = n*(n-1)*(n-2)*...*3*2*1 </p> 
    <p>The number of possible repeated arrangements of p objects out of n is n^p. </p>

    <br>
    <a href="index.php">⬅ Back to Menu</a>
</body>
</html>
