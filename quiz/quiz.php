<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Quiz with Randomized Options</title>
    <style>
        #progressBarContainer {
            width: 100%;
            background-color: #ddd;
            border-radius: 8px;
            margin-bottom: 15px;
            display: none;
        }
        #progressBar {
            width: 100%;
            height: 20px;
            background-color: #4CAF50;
            border-radius: 8px;
        }
        #timer {
            font-weight: bold;
            color: red;
            margin-bottom: 10px;
            display: none;
        }
        #quizForm {
            display: none;
        }
        #restartBtn {
            display: none;
            margin-top: 15px;
            background: #f44336;
            color: white;
            padding: 8px 12px;
            border: none;
            border-radius: 5px;
        }
    </style>
    <script>
        let timeLeft = 30;
        let totalTime = 30;
        let countdown;

        // Quiz questions stored in an array
        const questions = [
            {
                q: "What is the capital of Bangladesh?",
                options: ["Dhaka", "Chittagong", "Khulna"],
                answer: "Dhaka",
                name: "q1"
            },
            {
                q: "What is 2 + 2?",
                options: ["3", "4", "5"],
                answer: "4",
                name: "q2"
            },
            {
                q: "Which language is spoken in Bangladesh?",
                options: ["Hindi", "Bengali", "Urdu"],
                answer: "Bengali",
                name: "q3"
            }
        ];

        // Shuffle array utility
        function shuffle(array) {
            for (let i = array.length - 1; i > 0; i--) {
                const j = Math.floor(Math.random() * (i + 1));
                [array[i], array[j]] = [array[j], array[i]];
            }
            return array;
        }

        function renderQuiz() {
            let quizForm = document.getElementById("quizForm");
            quizForm.innerHTML = ""; // clear old content

            let shuffledQuestions = shuffle([...questions]); // shuffle questions

            shuffledQuestions.forEach((qObj, index) => {
                let block = document.createElement("div");
                block.innerHTML = `<p>${index + 1}. ${qObj.q}</p>`;

                // Shuffle options before displaying
                let shuffledOptions = shuffle([...qObj.options]);
                shuffledOptions.forEach(opt => {
                    block.innerHTML += `<input type="radio" name="${qObj.name}" value="${opt}"> ${opt}<br>`;
                });

                quizForm.appendChild(block);
            });

            quizForm.innerHTML += '<br><input type="submit" value="Submit Quiz">';
        }

        function startQuiz() {
            timeLeft = totalTime;
            document.getElementById("quizForm").style.display = "block";
            document.getElementById("timer").style.display = "block";
            document.getElementById("progressBarContainer").style.display = "block";
            document.getElementById("startBtn").style.display = "none";
            document.getElementById("restartBtn").style.display = "inline-block";

            renderQuiz(); // render randomized quiz

            let progressBar = document.getElementById("progressBar");
            progressBar.style.width = "100%";
            progressBar.style.backgroundColor = "#4CAF50";

            clearInterval(countdown);

            let timer = document.getElementById("timer");
            countdown = setInterval(function() {
                if (timeLeft <= 0) {
                    clearInterval(countdown);
                    document.getElementById("quizForm").submit();
                } else {
                    timer.innerHTML = timeLeft + " seconds remaining";
                    let progressWidth = (timeLeft / totalTime) * 100;
                    progressBar.style.width = progressWidth + "%";

                    if (timeLeft <= 5) {
                        progressBar.style.backgroundColor = "red";
                    } else if (timeLeft <= 10) {
                        progressBar.style.backgroundColor = "orange";
                    }
                }
                timeLeft -= 1;
            }, 1000);
        }

        function restartQuiz() {
            document.getElementById("quizForm").style.display = "none";
            document.getElementById("timer").style.display = "none";
            document.getElementById("progressBarContainer").style.display = "none";
            document.getElementById("startBtn").style.display = "inline-block";
            document.getElementById("restartBtn").style.display = "none";

            clearInterval(countdown);
            document.getElementById("quizForm").reset();
        }
    </script>
</head>
<body>
    <h2>Simple PHP Quiz</h2>
    <button id="startBtn" onclick="startQuiz()">Start Quiz</button>
    <button id="restartBtn" onclick="restartQuiz()">Restart Quiz</button>

    <div id="timer"></div>
    <div id="progressBarContainer">
        <div id="progressBar"></div>
    </div>

    <form id="quizForm" action="result.php" method="post"></form>
</body>
</html>