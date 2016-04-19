<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>login page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection"/>
    <!-- jQuery is required by Materialize to function -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript"></script>
</head>
<body class="blue lighten-2 lighten-2" style="padding: 5%;padding-left: 37%">
<script>
    function showCustomer(str) {
        var xmlhttp;

        if (str == "") {
            document.getElementById("livesearch").innerHTML = "";
            return;
        }
        if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
        else {// code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("livesearch").innerHTML = xmlhttp.responseText + "<br/>";

            }
        }
        xmlhttp.open("GET", "userlist.php?usernm=" + str, true);
        xmlhttp.send();
    }
</script>


<div style="float:left;align-self: auto; padding-left: 13% "><h4 class="white-text">Login page</h4></div>
<br><br><br><br>

<div style="padding: 10px;float:left;align-self: auto;" class="white popout z-depth-4  ">
    <!--form for searching user-->
    <form style="width: 100%" action="userlist.php" method="get">
        <input style="width: 100%" class="waves-button-input" type="text" id="username" placeholder="Search username"
               name="usernm"
               onkeyup="showCustomer(this.value)">
    </form>

    <div style="width: 100%" id="livesearch"></div>
    <br/>

    <form style="width: 100%" action="user.php" method="post">
        <input style="width: 100%" type="text" id="user" placeholder="usrname" name="user" autocomplete="on"
            >
        <input style="width: 100%" type="password" id="pass" placeholder="pass" name="pass">
        <input  class=" transparent picker__button--today" style="width: 100%" type="submit" value="Login">
    </form>
        <form style="font-size: 120%" method="get" action="signup.php" >
            <input   class=" transparent picker__button--today" style="width: 100%" type="submit" value="Sign-up">

        </form>

</div><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<footer class="white-text" style="padding-left: 60%">&copy; Developed by Vikas Raj Karadia 2015-16</footer>
</body>
</html>