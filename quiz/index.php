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
    <title>Quiz Portal</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Welcome, <?php echo $_SESSION["username"]; ?>!</h2>
    <p>Please choose what you’d like to do:</p>

    <div style="text-align:center; margin-top:20px;">
        <a href="tutorial.php">
            <button style="padding:10px 20px; margin:10px;">📘 Math Tutorial</button>
        </a>
        <a href="quiz.php">
            <button style="padding:10px 20px; margin:10px;">📝 Take Math Quiz</button>
        </a>
        <a href="GE.php">
            <button style="padding:10px 20px; margin:10px;">📝 Take GE Quiz</button>
        </a>
    </div>

    <br>
    <a href="logout.php">Logout</a>
</body>

</html>

