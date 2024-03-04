<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/da55c0c57e.js" crossorigin="anonymous"></script>
    <title>Features</title>
    <style>
    body {
        margin: auto;
        padding: auto;
        font-family: sans-serif, serif;
    }

    .display-5 {
        text-align: center;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        font-style: italic;
        font-weight: bold;
        background-color: black;
    }

    #exam {
        background-color: #2F4F4F;
    }

    .card-title a {
        color: whitesmoke;
        text-decoration: none;
    }

    #extra {
        text-align: center;
        background-color: #2F4F4F;

    }

    .card-text {
        color: burlywood;
    }

    .lead {
        font-weight: bold;

    }
    </style>
</head>

<body class=" h-100  text-white bg-dark">
    <?php
    include "nav.php";
    $strconn = mysqli_connect("localhost", "root", "", "final_project");
    if (!$strconn)
        echo "Connection failed" . mysqli_connect_error();
    else {
    }
    ?>

    <div id="content-wrap">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <img src="images/ju.jpg" style="display:block;
        margin-left: auto;
        margin-right: auto;">
                <h1 class="display-2 " style="text-align: center;">Features</h1><br>
                <p class="lead">Features of this system:</p>
                <p>Our focus is on providing the best user experience for our customers,and their employees or students.
                    we strive every day to improve our website and give you excellent
                    support.We do this with a smile, and a cup of coffee in our hands.</p>
                <hr class="my-4">
            </div>
        </div>
    </div>
    <br><br>
    <br><br>

    <div class="container" id="exam">
        <div class="row">
            <div class="mt-4 pl-3">
                <h2 class="display-5">Exam Features</h2>

                <div class="row">

                    <div class="col-xl-4 col-lg-4 col-md-6 border p-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-8">
                                    <h5 class="card-title"><a href="feature/createTest.php">Create a Question</a>
                                    </h5>
                                    <p class="card-text">

                                        Use our exam builder to create engaging online exams and challenge your
                                        students.


                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 border p-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-8">
                                    <h5 class="card-title"><a href="feature/easyUse.php">Easy to use</a>
                                    </h5>
                                    <p class="card-text">

                                        Take the full benefit of our easy to use test maker and create tests within
                                        minutes.

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-6 border p-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-8">
                                    <h5 class="card-title"><a href="#">Multiple type questions</a>
                                    </h5>
                                    <p class="card-text">

                                        We have a wide range of question types to choice from: multiple choice text
                                        questions, Multiple choice image questions, Fill in the blank, free text,
                                        video questions and audio questions. You can even create questions with
                                        multiple correct answers.

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 border p-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-8">
                                    <h5 class="card-title"><a href="feature/rules.php">Rules and Regulations</a>
                                    </h5>
                                    <p class="card-text">

                                        You set the rules of your exam. Set the pass and fail rules. Set the amount
                                        of attemtps for each user. Can they review their answers before committing.
                                        Do they get feedback after each question, at the end of the exam, or none at
                                        all. Set a timer on your exam, or not. The possibilities are endless.

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 border p-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-8">
                                    <h5 class="card-title">No Limits
                                    </h5>
                                    <p class="card-text">

                                        Create unlimited online exams with our exam builder. The sky is the limit.
                                        Never stop learning!

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 border p-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-8">
                                    <h5 class="card-title"><a href="feature/qbank.php">Question bank</a>
                                    </h5>
                                    <p class="card-text">

                                        Create a question bank with lots of questions. Use your question bank to
                                        efficiently create exams. Just choose our randomizer and put in the amount
                                        of questions you want to have in your exams.


                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <div class="mt-4 pl-3" id="extra">
        <h2 class="display-5">More Feature</h2>

        <div class="row">

            <div class="col-xl-4 col-lg-4 col-md-6 border p-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-8">
                            <h5 class="card-title">Know your users

                            </h5>
                            <p class="card-text">

                                With our advanced user management you can know your users by asking extra
                                information.

                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 border p-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-8">
                            <h5 class="card-title">Self-registration

                            </h5>
                            <p class="card-text">

                                Let your users sign-up for your exams themselves. No assigning required.

                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 border p-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-8">
                            <h5 class="card-title">Certification
                            </h5>
                            <p class="card-text">

                                Need to hand out certificates after completing a course? No worries. Our automated
                                exam certification proces handles all the administration.

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    &nbsp;

    <?php
    include "footer.php";
    ?>


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