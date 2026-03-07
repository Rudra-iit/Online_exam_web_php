<!DOCTYPE html>
<html>
<head>
    <title>Quiz Results</title>
    <link rel="stylesheet" href="style.css">
    <style>
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background: #fff;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: center;
        }
        th {
            background: #3498db;
            color: white;
        }
        .correct {
            color: green;
            font-weight: bold;
        }
        .wrong {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
<?php
// Questions and answers
$questions = [
    "q1" => ["text" => "What is the capital of Bangladesh?", "answer" => "Dhaka"],
    "q2" => ["text" => "What is 2 + 2?", "answer" => "4"],
    "q3" => ["text" => "Which language is spoken in Bangladesh?", "answer" => "Bengali"]
];

$score = 0;

echo "<h2 style='text-align:center;'>Quiz Results</h2>";
echo "<table>";
echo "<tr><th>Question</th><th>Your Answer</th><th>Correct Answer</th><th>Result</th></tr>";

foreach ($questions as $key => $qData) {
    $userAnswer = isset($_POST[$key]) ? $_POST[$key] : "No answer";
    $correctAnswer = $qData["answer"];
    $resultClass = ($userAnswer == $correctAnswer) ? "correct" : "wrong";
    $resultText = ($userAnswer == $correctAnswer) ? "✔ Correct" : "✘ Wrong";

    if ($userAnswer == $correctAnswer) $score++;

    echo "<tr>
            <td>{$qData['text']}</td>
            <td>$userAnswer</td>
            <td>$correctAnswer</td>
            <td class='$resultClass'>$resultText</td>
          </tr>";
}

echo "</table>";
echo "<h3 style='text-align:center;'>Your Score: $score / " . count($questions) . "</h3>";
?>
</body>
</html>