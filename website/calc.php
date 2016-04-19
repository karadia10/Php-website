<?php
session_start();
if (!$_SESSION)
    header("location:login.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Calculator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="style.css">
</head>


<body class="blue lighten-2 z-depth-1" style="padding: 5%;padding-left: 37%">
<p class="white-text">Logged in as <strong><em></em><ins><?php echo  $_SESSION['username']?></ins><a style="padding-left: 20%" href="logout.php"><ins class="white-text">LogOut</a></ins></strong></em></p>
<a href="cv.php" style="color: black"><-
    <ins>Back to CV</ins>
</a>

<div style="float:left;align-self: auto; padding-left: 55px "><h4 class="white-text">CALCULATOR</h4></div>
<br><br><br><br>

<!-- jQuery is required by Materialize to function -->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script type="text/javascript">

    var a = null, b = null, result, op, temp, i, fact = 1;


    function buttonCalled(x) {

        if (x == '+' || x == '-' || x == '*' || x == '/' || x == '%') {
            a = parseFloat(document.getElementById("inputBox").value);
            op = x;
            document.getElementById("inputBox").value = "";
        }
        else if (x == '=') {
            b = parseFloat(document.getElementById("inputBox").value);
            if (op == '+') {
                result = a + b;
            }
            else if (op == '-') {
                result = a - b;
            }
            else if (op == '*') {
                result = a * b;
            }
            else if (op == '/') {
                result = a / b;
            }
            else if (op == '%') {
                result = (a * b) / 100;
            }
            document.getElementById("inputBox").value = result;

        }
        else if (x == '0' || x == '1' || x == '2' || x == '3' || x == '4' || x == '5' || x == '6' || x == '7' || x == '8' || x == '9' || x == '.') {

            document.getElementById("inputBox").value += x;

        }
        else if (x == 'CLR') {
            document.getElementById("inputBox").value = "";
        }
        else if (x == '!') {

            temp = parseInt(document.getElementById("inputBox").value);
            for (i = 1; i <= temp; i++) {
                fact *= i;
            }
            document.getElementById("inputBox").value = fact;
            fact = 1;
        }

    }

</script>

<div style="float:left;align-self: auto;" class="white popout z-depth-2  ">

    <table class="responsive-table white bordered">
        <tr>
            <td>
                <input class="waves-button-input" type="text" id="inputBox">
            </td>
        </tr>
    </table>

    <table class="responsive-table white bordered">
        <tr>

            <td style="width: 60px;height:  60px">
                <input onclick="buttonCalled('1')" type="button" id="button1" value="1"
                       class="transparent picker__button--today" style="width: 60px;height: 60px">
            </td>
            <td style="width: 60px;height:  60px">
                <input onclick="buttonCalled('2')" type="button" id="button2" value="2"
                       class="transparent picker__button--today" style="width: 60px;height: 60px">
            </td>
            <td style="width: 60px;height:  60px">
                <input onclick="buttonCalled('3')" type="button" id="button3" value="3"
                       class="transparent picker__button--today" style="width: 60px;height:  60px">
            </td>
            <td style="width: 60px;height:  60px">
                <input onclick="buttonCalled('+')" type="button" id="buttonPlus" value="+"
                       class="transparent picker__button--today" style="width: 60px;height: 60px">
            </td>
            <td style="width: 60px;height:  60px">
                <input onclick="buttonCalled('%')" type="button" id="buttonPercent" value="%"
                       class="transparent picker__button--today" style="width: 60px;height: 60px">
            </td>
        </tr>
        <tr>

            <td style="width: 60px;height:  60px">
                <input onclick="buttonCalled('4')" type="button" id="button4" value="4"
                       class="transparent picker__button--today" style="width: 60px;height: 60px">
            </td>
            <td style="width: 60px;height:  60px">
                <input onclick="buttonCalled('5')" type="button" id="button5" value="5"
                       class="transparent picker__button--today" style="width: 60px;height: 60px">
            </td>
            <td style="width: 60px;height:  60px">
                <input onclick="buttonCalled('6')" type="button" id="button6" value="6"
                       class="transparent picker__button--today" style="width: 60px;height:  60px">
            </td>
            <td style="width: 60px;height:  60px">
                <input onclick="buttonCalled('-')" type="button" id="buttonMinus" value="-"
                       class="transparent picker__button--today" style="width: 60px;height: 60px">
            </td>
            <td style="width: 60px;height:  60px">
                <input onclick="buttonCalled('!')" type="button" id="buttonFact" value="n!"
                       class="transparent picker__button--today" style="width: 60px;height: 60px">
            </td>
        </tr>
        <tr>

            <td style="width: 60px;height:  60px">
                <input onclick="buttonCalled('7')" type="button" id="button7" value="7"
                       class="transparent picker__button--today" style="width: 60px;height: 60px">
            </td>
            <td style="width: 60px;height:  60px">
                <input onclick="buttonCalled('8')" type="button" id="button8" value="8"
                       class="transparent picker__button--today" style="width: 60px;height: 60px">
            </td>
            <td style="width: 60px;height:  60px">
                <input onclick="buttonCalled('9')" type="button" id="button9" value="9"
                       class="transparent picker__button--today" style="width: 60px;height:  60px">
            </td>
            <td style="width: 60px;height:  60px">
                <input onclick="buttonCalled('*')" type="button" id="buttonMultiply" value="*"
                       class="transparent picker__button--today" style="width: 60px;height: 60px">
            </td>
            <td style="width: 60px;height:  60px">
                <input onclick="buttonCalled('=')" type="button" id="button" value="="
                       class="transparent picker__button--today" style="width: 60px;height:  60px">
            </td>
        </tr>
        <tr>

            <td style="width: 60px;height:  60px">
                <input onclick="buttonCalled('CLR')" type="button" id="buttonClr" value="CLR"
                       class="transparent picker__button--today" style="width: 60px;height: 60px">
            </td>
            <td style="width: 60px;height:  60px">
                <input onclick="buttonCalled('0')" type="button" id="button0" value="0"
                       class="transparent picker__button--today" style="width: 60px;height: 60px">
            </td>
            <td style="width: 60px;height:  60px">
                <input onclick="buttonCalled('.')" type="button" id="buttonDot" value="."
                       class="transparent picker__button--today" style="width: 60px;height:  60px">
            </td>
            <td style="width: 60px;height:  60px">
                <input onclick="buttonCalled('/')" type="button" id="buttonDivide" value="/"
                       class="transparent picker__button--today" style="width: 60px;height: 60px">
            </td>
        </tr>
        <tr>


        </tr>


    </table>
</div>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<footer class="white-text" style="padding-left: 60%">&copy; Developed by Vikas Raj Karadia 2015-16</footer>

</body>

</html>