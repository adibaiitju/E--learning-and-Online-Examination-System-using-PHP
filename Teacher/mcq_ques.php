<?php include('mcq1.php')  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title> MCQ </title>
</head>

<body>
    <style type="text/css">
    table {
        border-collapse: collapse;
        width: 100%;
        color: purple;
        font-family: monospace;
        font-size: 25px;
        text-align: left;

    }

    th {
        background-color: #6C7B98;
        color: black;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    div {
        background-color: #6C7B98;
        color: black;
    }
    </style>

    <body>
        <header class="display-2">MCQ Question Create</header>
        <div class="container">
            <form class="" action="" method="post">
                <div class="row">
                    <div class="col-25">
                        <label for="datetime"> Date & Time:</label>
                    </div>
                    <div class="col-75">
                        <input type="datetime-local" id="date" name="date"><br><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="course">Course Code:</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="course"><br><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="batch">Batch:</label>
                    </div>
                    <div class="col-75">

                        <input type="text" name="batch"><br><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="number">Number Of Question: </label>
                    </div>
                    <div class="col-75">
                        <input type="number" name="number" onchange="onNumberOfQuestionChange(this.value)"><br><br>
                    </div>
                </div>
                <form action="mcq1.php" method="post">

                    <div class="container">
                        <div class="row">
                            <div class="col-sm-3">
                                <h1>MCQ Question</h1>
                                <label for="no_mcq"><b>no_mcq</b></label>
                                <input class="form-control" type="text" name="no_mcq" required>

                                <label for="question"><b>Question</b></label>
                                <input class="form-control" type="text" name="question" required>
                                <label for="correct_answer"><b>correct_answer</b></label>
                                <input class="form-control" type="text" name="correct_answer" required>
                                <label for="wrong_ans1"><b>wrong_ans1</b></label>
                                <input class="form-control" type="text" name="wrong_ans1" required>

                                <label for="wrong_ans2"><b>wrong_ans2</b></label>
                                <input class="form-control" type="text" name="wrong_ans2" required>
                                <label for="wrong_ans3"><b>wrong_ans3</b></label>
                                <input class="form-control" type="text" name="wrong_ans3" required>

                                <input class="btn btn-secondary" type="submit" name="create" value="Submit">
                            </div>
                        </div>
                    </div>


                </form>
                <br>
                <table border="5px">
                    <tr>
                        <th><b>Question_no</b></th>
                        <th><b>Question</b></th>
                        <th><b>correct_answer</b></th>
                        <th><b>wrong_ans1</b></th>
                        <th><b>wrong_ans2</b></th>
                        <th><b>Wrong_ans3</b></th>

                    </tr>
                    <?php
                    include('mcq1.php');

                    ?>


                    <script src="../js/mcq.js"></script>
    </body>

</html>