<?php
session_start();
$con = mysql_connect('localhost', 'karadia10', '');
if (!$con) {
    die('Could not connect: ' . mysql_connect_error());
}
mysql_select_db("log");

$uname = $_POST["user"];
$pass = $_POST["pass"];


$login_query = "SELECT * FROM USER";


$u_db = mysql_query($login_query);

$counted = mysql_num_rows($u_db);
$count = 0;
for ($i = 0; $i < $counted; $i++) {
    $myrow = mysql_fetch_assoc($u_db);
    $u = $myrow['username'];
    $p = $myrow['pass'];
    if ($u == $uname && $p == $pass) {
        $_SESSION['username'] = $uname;
        header("location:cv.php");
    } else {
        $count++;
    }

}
if ($count == $counted) {
    echo "Login unsuccessful";
    header("location:login.php");
}
?>
