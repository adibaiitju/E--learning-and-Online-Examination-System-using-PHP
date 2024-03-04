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

    .buttons button {
        height: 50px;
        width: 150px;
        font-size: 18px;
        font-weight: 600;
        color: white;
        background: #BC8F8F;
        outline: none;
        cursor: pointer;
        border: 1px solid black;
        border-radius: 25px;
        transition: .4s;
        margin: 15px 180px;
        text-align: center;

    }

    .buttons button:hover {
        background: #cc0000;
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
            <li>CreateTest</li>
        </ul>
    </nav>
    <div id="content-wrap">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <img src="../images/ju.jpg" style="display:block;
        margin-left: auto;
        margin-right: auto;">
                <h1 class="display-2 " style="text-align: center;">Create a Question</h1><br>
                <p class="lead"> User can set multiple types of Question...such as multiple choice question, written
                    question or
                    both. user can also upload a file of question..</p>

                <hr class="my-4">
            </div>
        </div>
    </div>
    <br><br>
    <br><br>

    <div class="center">
        <h3> Question type:<h3>
                <div class="buttons">
                    <a href="#">
                        <button>MCQ Question</button> </a>




                    <a href="#">
                        <button> Theory Question</button> </a>




                    <a href="#">
                        <button>Both MCQ and written</button> </a>




                    <a href="#">
                        <button>Upload a file</button> </a>
                </div>
    </div>

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