<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/da55c0c57e.js" crossorigin="anonymous"></script>
    <title>About Us</title>
    <style>
    body {
        margin: auto;
        padding: auto;
        font-family: sans-serif, serif;
    }

    #content {
        background-color: #2F4F4F;
        text-align: center;
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
                <h1 class="display-2 " style="text-align: center;">About Us</h1><br>
                <p class="lead">Online Test System, Our focus is on providing the best user experience for our
                    customers,
                    and
                    their employees or students. we strive every day to improve our website and give you excellent
                    support.
                    We
                    do this with a smile, and a cup of coffee in our hands!</p>
                <hr class="my-4">


            </div>
        </div>
    </div>


    <br><br>
    <br><br>
    <div class="container">
        <div class="row" id="content">
            <div class="col-sm-4">
                <h1 class="display-4">What we do</h1>
                <p class=""> Our goal is to create the best platform for online exanination process.. You can already
                    create
                    exams, courses, assessments and quizzes through our website. We aim high, and we like to challenge
                    ourselves, so we can deliver great quality.</p>
            </div>
            <div class="col-sm-4">
                <h1 class="display-4"> who we are</h1>
                <p>We are a dedicated team studying at Institute of Information Technology. All with one thing in
                    common: we are happy and dedicated. </p>
            </div>
            <div class="col-sm-4">
                <h1 class="display-4">How we work</h1>
                <p>We give support, we develop new features, we solve bugs. That’s what we do all day in an eggshell .
                    To deliver quality, we prioritize our work. Therefore we use Scrum. In the meantime we learn, grow,
                    and have fun. Because work isn’t always about work.</p>
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