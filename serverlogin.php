<?php
$err = '';
if (isset($_POST['submit'])) {
    if (empty($_POST['user']) || empty($_POST['pass'])) {
        echo 'Form fields cannot be empty! Try again!';
    } else {
        $user = $_POST['username'];
        $pwd = $_POST['password'];
        $conn = mysqli_connect("localhost", "root", "", "login_form");
        //$dbname = msqli_select_db($conn, "webformdata");
        $query = mysqli_query($conn, "SELECT * FROM login_form WHERE Username='$user' AND Password='$pwd'");

        $record = mysqli_num_rows($query);
        if ($record = 1) {
            header("Location: index.php");
        } else {
            $err = "Incorrect Input!";
        }
        mysqli_close($conn);
    }
}
