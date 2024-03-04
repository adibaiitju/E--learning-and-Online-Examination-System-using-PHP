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

    .display-6 {
        color: #BC8F8F;
        font-size: 40px;
        width: 100%;
        font-style: italic;
        font-weight: bolder;
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
            <li>Easy to Use</li>
        </ul>
    </nav>
    <div id="content-wrap">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <img src="../images/ju.jpg" style="display:block;
        margin-left: auto;
        margin-right: auto;">
                <h1 class="display-2 " style="text-align: center;">Easy Question Creator</h1><br>
                <p class="lead"> Why our website the best exam builder? Because Creating any type of question with our
                    software is an seamless,intuitive experience.Let's Explore....</p>
                <hr class="my-4">
            </div>
        </div>
    </div>
    <br><br>

    <div class="container" id="content">
        <h2 class="display-6">Don't nedd to download anything to computer</h2>
        <p style="color: white; font-size: 20px; width:950px;margin-left: 200px">
            Our easy test maker is cloud-based, which means you don’t have to download anything to your computer, and it
            doesn’t have to be a special, expensive computer. A laptop or even a mobile device connected to the Internet
            will do the trick.

        </p>
        <br><br>
        <h2 class="display-6"> It's not necessary to be a geek or tech expert to use it</h2>

        <p style="color: white; font-size: 20px; width:950px;margin-left: 200px"> Nope, there’s no need to be a techie
            to start creating awesome courses and exams. Our team do all the hard work behind-the-scenes so you can
            create your exam with simple steps, with a very intuitive, user-friendly (and beautiful) interface. Even
            creating and issuing certificates for those who pass your exams is much easier with our tool.


        </p>

        <br><br>
        <h2 class="display-6">New Features</h2>
        <p style="color: white; font-size: 20px; width:950px;margin-left: 200px">

            Our tools are already awesome, but we also know it’s a work in progress. This means, we are always adding
            new features to make the user experience even better! And, if you have some ideas, feel free to share them
            with us!


        </p>
        <br><br>
        <h2 class="display-6"> Ready to get started?</h2>
        <p style="color: white; font-size: 20px; width:950px;margin-left: 200px">As you could see, there are many
            advantages to using our tool. So, join the club and start using our easy exam creator now! if you want to
            see for yourself how this amazing exam creator works.</p>
    </div>
    <br><br>
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