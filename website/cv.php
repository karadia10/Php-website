<?php
session_start();
if (!$_SESSION) {
    sleep(2);
    header("location:login_again.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Resume</title>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="style.css">
</head>
<style>

</style>
<body class="grey transparent popout">

<!-- jQuery is required by Materialize to function -->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script type="text/javascript">
    //custom JS code
</script>
<p style="padding-left: 20%" class="blue-text">Logged in as <strong><em></em><ins><?php echo  $_SESSION['username']?></ins><a style="padding-left: 50%" href="logout.php"><ins>LogOut</a></ins></strong></em></p>
<div style="margin:0 auto;">
    <!--Right toolbar-->
    <div class="blue darken-2 " style="float: right;align-self: auto ; padding-left:50px;width:75%;height: 160px;">

        <div class="blue darken-2" style="float: left;align-self: auto ; width:50%;height: 160px;padding-top: 10px">
            <h5 class="white-text">About :</h5>

            <p class="white-text">
                Currently I'm a pursuing my degree of B.Tech.(3rd year) in Information Technology at NIT Jalandhar.<br>
                As an Computer Geek I'm a Technology lover.
            </p>
        </div>


        <div class="blue darken-2"
             style="float: left; align-self: auto ;padding-left:50px; width:50%;height: 160px;padding-top: 10px">
            <h5 class="white-text ">Contact :</h5>
            <li class="white-text">L-66, C-Block, Panchsheel, Ajmer-305001</li>
            <li class="white-text ">+91 9501052677</li>
            <li class="white-text">karadia10@gmail.com</li>
            <li class="white-text">www.abstracthack.in</li>

        </div>
    </div>

    <!--Bottom Toolbar-->
    <div class="blue-grey lighten-5 z-depth-4 "
         style="float: left;align-self: auto ; border: 1px; width:25%;height: 100%; padding-bottom: 10px">

        <!--Left Toolbar-->
        <div class="intro blue darken-2 z-depth-2  " style=" float: left;align-self: auto ;height: 240px; width: 100%">
            <h5 class="black-text text-lighten-5" style="text-align: center;"><strong>VIKAS RAJ KARADIA</strong></h5>
            <h6 class="grey-text text-lighten-5 center"><strong>Web Developer<br>Coder</strong></h6>

            <div style="padding-left: 31%;padding-top: 10px">
                <img style="align-items:center;width: 120px;height: 120px; "
                     class="avatar circle mdi-editor-border-outer" src="image/profile.jpg">
            </div>
        </div>
        <div style="padding-top: 150px; text-align: center">
            <br/><br/><br/><br/>
            <h5 class="text-black" style="padding-top: 20px">Objective</h5>

            <p style="padding: 5px" class="mdi-border"><strong>
                    I want to succeed in a stimulating and challenging environment that will provide me advanced
                    opportunities.</strong>
            </p>

            <div class="divider grey"></div>


            <h5 class="text-black" style="padding-top: 20px">I Am Live @</h5>
            <li class="text-white" style="text-align: left;padding-left: 10%"><a target="_blank"
                                                                                 href="https://www.facebook.com/vickykaradia">Facebook</a>
            </li>
            <li class="text-white" style="text-align: left;padding-left: 10%"><a target="_blank"
                                                                                 href="https://www.twitter.com/karadiav10">Twitter</a>
            </li>
            <br/>

            <div class="divider grey"></div>

            <h5 class="text-black" style="padding-top: 20px;">Area of Interest</h5>
            <li class="text-white" style="text-align: left;padding-left: 10%">Coding</li>
            <li class="text-white" style="text-align: left;padding-left: 10%">Web Development</li>
            <li class="text-white" style="text-align: left;padding-left: 10%">Ethical Hacking</li>
            <li class="text-white" style="text-align: left;padding-left: 10%">Android Development</li>
            <li class="text-white" style="text-align: left;padding-left: 10%">Material Design(Introduced by Google)</li>
            <br/>

            <div class="divider grey"></div>
            <h5 class="text-black" style="padding-top: 20px;">Declaration</h5>

            <p class="text-white" style="text-align: left;padding-left: 10%">I do hereby declare that all the
                informations
                mentioned above are valid.<br>Sincierly<br>Vikas Raj Karadia</p>
            <br/>


            <div class="divider grey"></div>
            <p>&copy; Vikas Raj Karadia 2015-16</p>

            <div class="divider grey"></div>
            <p><a href="calc.php">My Calculator</a></p>


        </div>

    </div>

    <!--Main content-->
    <div class="blue-grey lighten-5 z-depth-1"
         style="float: right;align-self: auto ; padding:5px ;width:75%;height: 100%;">
        <div class="mdi-border " style="border-color:grey;padding: 2% ;width: 100%;">
            <div style="float: left; align-self: auto ;padding-left: 100px">
                <h5 class="text-black">Coding Languages</h5>
                <li class="text-black">C++</li>
                <div class="progress">
                    <div class="determinate" style=" width: 80%"></div>
                </div>

                <li class="text-black">C</li>
                <div class="progress">
                    <div class="determinate" style=" width: 90%"></div>
                </div>
                <li class="text-black">Java</li>
                <div class="progress">
                    <div class="determinate" style="width: 60%"></div>
                </div>
                <li class="text-black">SQL</li>
                <div class="progress">
                    <div class="determinate" style=" width: 80%"></div>
                </div>
            </div>


            <div style="float: left; align-self: auto ;padding-left: 30%">
                <h5 class="text-black">Skills</h5>
                <li class="text-black">Web Development</li>
                <div class="progress">
                    <div class="determinate" style=" width: 80%"></div>
                </div>

                <li class="text-black">Android Mobile Development</li>
                <div class="progress">
                    <div class="determinate" style=" width: 50%"></div>
                </div>
                <li class="text-black">Blogger</li>
                <div class="progress">
                    <div class="determinate" style="width: 95%"></div>
                </div>
                <li class="text-black">Linux(Basic)</li>
                <div class="progress">
                    <div class="determinate" style="width: 70%"></div>
                </div>
            </div>

        </div>
    </div>

    <div class="blue darken-2 z-depth-3 "
         style="float: right;align-self: auto ; padding:5px ; padding-left:45px;width:75%;height: 100%;">
        <h5 class="white-text text-lighten-5" style="text-align: left; padding-left: 10px"><strong>Education</strong>
        </h5>
        <li class="white-text" style="padding-left: 2%">
            <h6><strong>10th</strong></h6>

            <p style="padding-left: 20px">8.2 CGPA CBSE board from K.V. Beawar, Rajasthan</p>
        </li>
        <li class="white-text" style="padding-left: 2%">
            <h6><strong>12th</strong></h6>

            <p style="padding-left: 20px">68.4% CBSE board from Samrat Public School, Ajmer, Rajasthan</p>
        </li>
        <li class="white-text" style="padding-left: 2%">
            <h6><strong>Undergraduate</strong></h6>

            <p style="padding-left: 20px">6.91 CGPA(upto 4th Semester) in B.Tech. Information Technology at Dr. B.R.
                Ambedkar
                National Institute of Technology Jalandhar,Punjab</p>
        </li>
    </div>


    <div class="blue-grey lighten-5 " style="float: right;align-self: auto ; padding:5px ;width:75%;height: 100%;">
        <div class="mdi-border " style="border-color:grey;padding: 2% ;width: 100%;">
            <div style="float: left; align-self: auto ;padding-left: 45px">
                <h5 class="text-black"><strong>Extra-Curricular Activities</strong></h5>
                <li class="text-black">Core Member at NITJ Shiksha (Blogging team of NIT Jalandhar)</li>


                <li class="text-black">Lecture in Workshop about Blogging at NIT Jalandhar</li>


            </div>
        </div>
        <div class="divider grey"></div>
    </div>

    <div class="blue darken-2 z-depth-3 "
         style="margin-outside: 1px;float: right;align-self: auto ; padding:5px ;width:75%;height: 100%;">
        <h5 class="white-text text-lighten-5" style="text-align: left; padding-left: 45px"><strong>Hobbies</strong></h5>
        <li class="white-text" style="padding-left: 6%">Music
        </li>
        <li class="white-text" style="padding-left: 6%">PC Gaming
        </li>
        <li class="white-text" style="padding-left: 6%">Internet Surfing
        </li>
        <br><br>

        <div class="divider grey"></div>

    </div>

</div>
</body>
</html>