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

    ul.breadcrumb {
        padding: 10px 16px;
        list-style: none;
        background-color: black;
    }

    ul.breadcrumb li {
        display: inline;
        font-size: 18px;
    }

    ul.breadcrumb li+li:before {
        padding: 8px;
        color: black;
        content: "/\00a0";
    }

    ul.breadcrumb li a {
        color: #0275d8;
        text-decoration: none;
    }

    ul.breadcrumb li a:hover {
        color: #01447e;
        text-decoration: underline;
    }

    .center {
        background-color: #2F4F4F;
    }

    .center h3 {
        margin-left: 230px;
        color: #FAF0E6;
        font-size: 50px;
        width: 900px;
        font-weight: bold;
        text-align: center;
    }
    </style>

<body class=" h-100  text-white bg-dark">
    <?php
    $strconn = mysqli_connect("localhost", "root", "", "final_project");
    if (!$strconn)
        echo "Connection failed" . mysqli_connect_error();
    else {
    }
    ?>
    <nav aria-label="breadcrumb">
        <ul class="breadcrumb">
            <li><a href="../index.php">Home</a></li>
            <li><a href="../feature.php">Features</a></li>
            <li>Rules and Regulations</li>
        </ul>
    </nav>
    <div id="content-wrap">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <img src="../images/ju.jpg" style="display:block;
        margin-left: auto;
        margin-right: auto;">
                <h1 class="display-2 " style="text-align: center;">Rules and Regulations For online examination</h1><br>
                <p class="lead"> Here we've provided some simple rules and regulations for online examination system.
                    Students must have to follow thsese rules during examination.</p>
                <hr class="my-4">
            </div>
        </div>
    </div>
    <br><br>
    <br><br>
    <div class="container">
        <h2 class="display-6">Steps For Accessing Your Exam Online:</h2>
        <p>
        <ul style="color: white; font-size: 20px; width:700px;margin-left: 200px">
            <li> Close all programs, including email</li>

            <li>Ensure internet data backup</li>

            <li>To begin the exam, click on the link to the appropriate exam listed under Online Assessments.</li>

            <li> login with proper Id,name ,email adress</li>
        </ul>
    </div>
    <div class="container">
        </p>
        <br>
        <h2 class="display-6"> During the exam:</h2>
        <p>
        <ul style="color: white; font-size: 20px; width:700px;margin-left: 200px">
            <li>Close all programs, including email</li>

            <li> Students are not allowed to use his or her textbook, course notes, or receive help from a internet or
                any other outside source.</li>

            <li>Students must complete the exam and submit within allotted time for the exam. </li>

            <li>The webcam and microphone required for the exam must be enabled and
                running.</li>
            <li> Nothing may cover the lens of the webcam at any time during the
                Examination.</li>
            <li>Wearing ear plugs or headphones is not allowed. </li>
            <li>The Candidate may not leave the room after starting the Examination </li>
            <li> There may not be other computers or similar devices running in the
                examination room.</li>
            <li>There may not be any other people in the room. </li>

        </ul>



        </p>
        <br>
        <h2 style="margin-left: 300px"></h2>

    </div>
    <p style="font-size: 20x; width=100%; background-color=black">N.B: Committing Fraud, offering others
        the opportunity to commit Fraud or stimulating Fraud is
        prohibited.</p>

    <?php
    include "../footer.php";
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