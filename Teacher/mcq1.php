<?php
if (isset($_POST['insert']))
    $host = "localhost";
$dbuser = "root";


$dbpwd = "";
$dbname = "final_project";


$con = mysqli_connect($host, $dbuser, $dbpwd, $dbname);
if ($con == false) {
    echo "<h1>Error connect to Database</h1>";
}
if (mysqli_select_db($con, 'final_project')) {
    echo 'database selected';
}

$no_mcq = $_POST['no_mcq'];
$question = $_POST['question'];
$correct_answer = $_POST['correct_answer'];
$wrong_ans1 = $_POST['wrong_ans1'];
$wrong_ans2 = $_POST['wrong_ans2'];
$wrong_ans3 = $_POST['wrong_ans3'];


// connect to mysql database using mysqli


$sql = "INSERT INTO mcq (MCQ_ID,Question, Correct_Answer, Wrong_one,Wrong_two,Wrong_three)
VALUES ('$no_mcq','$question',' $correct_answer','$wrong_ans1','$wrong_ans2','$wrong_ans3')";

if (mysqli_query($con, $sql)) {
    echo "success";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
$mysql = "SELECT * FROM mcq";
$result = $con->query($mysql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["no_mcq"] . "</td><td>" . $row["question"] . "</td><td>" . $row["correct_answer"] . "</td><td>" . $row["wrong_ans1"] . "</td><td>" . $row["wrong_ans2"] . "</td><td>" . $row["wrong_ans3"] . "</td></tr>";
        # code...
    }
    # code...
    echo "</table>";
} else {
    echo "0 result";
}


mysqli_close($con);