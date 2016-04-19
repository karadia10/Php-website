<?php
session_start();
$con = mysql_connect('localhost', 'karadia10', '');
if (!$con) {
    die('Could not connect: ' . mysql_connect_error());
}
mysql_select_db("log");
$uname = $_POST["user"];
$pass = $_POST["pass"];

$search_query = "SELECT * from USER ";
$db = mysql_query($search_query);
$counted = mysql_num_rows($db);
$count = 0;
for ($i = 0; $i < $counted; $i++) {
    $myrow = mysql_fetch_assoc($db);
    $u = $myrow['username'];

    if ($uname == "" || $pass == "") {
        echo "fields must not be empty. Try again";
        break;
    } elseif ($u == $uname) {
        echo "Username already exist" . "<br/>";
        break;
    } else
        $count++;
}
if ($count == $counted) {
    $login_query = "INSERT INTO USER(username,pass) VALUES ('$uname','$pass')";
    $u_db = mysql_query($login_query);
    echo "Signup successful";
}

echo "<h4><a href='login.php'>Login page</a></h4>";

?>
