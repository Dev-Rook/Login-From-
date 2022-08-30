<?php
$err = '';
if (isset($_POST['Submit'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        echo 'Form fields cannot be empty! Try again!';
    } else {
        $user = $_POST['username'];
        $pwd = $_POST['password'];
        $conn = mysqli_connect("localhost", "root", "", "login_form");
        //$dbname = msqli_select_db($conn, "webformdata");
        $query = mysqli_query($conn, "SELECT * FROM login_form WHERE Username='$user' AND Password='$pwd'");

        $record = mysqli_num_rows($query);
        if ($record = 1) {
            header("Location: Home.html");
        } else {
            $err = "Incorrect Input!";
        }
        mysqli_close($conn);
    }
}
