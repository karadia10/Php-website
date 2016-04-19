<?php
$con = mysql_connect('localhost', 'karadia10', '');
if (!$con) {
    die('Could not connect: ' . mysqli_connect_error());
}
mysql_select_db("log");
$user=$_GET['usernm']."%";

$login_query = "SELECT * FROM USER WHERE username LIKE  '$user'";
$u_db = mysql_query($login_query);

$counted = mysql_num_rows($u_db);

for ($i = 0; $i < $counted; $i++) {
    $myrow=mysql_fetch_assoc($u_db);
    $response=$myrow['username']."<br/>";
    echo $response;

}


?>