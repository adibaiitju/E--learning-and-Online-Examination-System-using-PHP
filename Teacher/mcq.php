<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>MCQ Question</title>
    <script src="../js/mcq.js"></script>
    <style>
    body {
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 0;
        font-family: sans-serif;
        background-color: black;
    }

    input {
        margin: 20px auto;
        padding: 8px 10px;
        border: indianred;
        outline: lawngreen;
    }

    button {
        padding: 8px 20px;
        background-color: maroon;
        color: mistyrose;
        border: none;
        cursor: pointer;
    }

    .addQuestions,
    header {
        margin: 40px auto;
        text-align: center;
        color: #fff;
        font-style: italic;
        font-family: cursive;
    }

    .info {
        text-align: center;
    }

    .info li {
        list-style-type: none;
        color: #fff;
        text-align: center;
    }

    .info button {
        margin: 30px 0;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
    }

    .questionsWrapper div {
        display: none;
        position: absolute;
    }

    .questionsWrapper div.is-active {
        display: block;
    }

    .questionDiv {
        margin: 20px auto;
        text-align: center;
        width: 100%;
    }

    .questionDiv li {
        list-style-type: none;
        color: #fff;
        padding: 12px 0;
    }

    .questionDiv li.correct,
    .questionDiv li.wrong {
        cursor: pointer;
    }

    .answersCorrect {
        color: #fff;
        text-align: center;
    }

    .nextButton {
        margin: 20px auto;
    }

    button a {
        text-decoration: none;
        color: mistyrose;

    }

    button a:hover {
        text-decoration: none;
    }
    </style>
</head>

<body class=" h-100  text-white bg-dark">

    <header class="display-3">MCQ Question Create</header>
    <div class="addQuestions">
        <input id="questionInput" type="text" placeholder="Question">
        <input id="correctInput" type="text" placeholder="Correct Answer">
        <input id="wrongOneInput" type="text" placeholder="Wrong Answer 1">
        <input id="wrongTwoInput" type="text" placeholder="Wrong Answer 2">
        <button onclick="handlers.addQuestion()">Add Question</button>
    </div>
    <div class="info">
        <li id="NumberQuestionsInQuiz"> 0 questions added to your quiz</li>
        <button onclick="view.displayQuestions()" id="startQuiz">Start Quiz</button>
        <button><a href="index.php">Back To Profile</a></button>
    </div>
    <p class="answersCorrect"></p>
    <div class="questionsWrapper"></div>
    <br><br><br><br>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
        integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>

</body>

</html>