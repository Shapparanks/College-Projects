<!DOCTYPE html>
<!--     changelog.html      
         Website Changelog to be displayed on homepage footer !-->
<html>
    <head>
        <title> Snow-Ply </title>
        <meta charset="UTF-8" >
        <meta name="viewport" content="width-device-width, initial-scale=1">
        <script src="https://kit.fontawesome.com/afd6aa68df.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="./CSS/T5.css">
        <link rel="icon" href="./IMG/Snow-Ply_logo.png">

    </head>
    <style>
        body{
            font-family: Arial;
        }
    </style>
<body>

    <!-- Top navigational bar -->
    <?php
        include "ErrorHandler.php";
        include "header.php";
    ?>

 <br><br><br><br><br>
    <h1 style="color: black; text-align: center;">Version Change Log</h1>

    <h2>CURRENT VERSION: 1.0.0</h2>
    <p>
        # 2021-10-11 <B>Version 1.0.0</B>
        <ul style="list-style-type: none;">
            <p><b>Verison Summary:</b><br>
                This version presents the first full itteration of the Project. The files presented within this log <br>
                are all the pages of this website.Each itteration will give you updates and any major changes to keep track of this<br> 
                webpages framework.</p>
            <p style="margin-right: auto;">Files within this itteration are as follows:</p>

            <ul style="list-style-type: none">
                <p >adminpage.html</p>
                <p>changelog.html</p>
                <p>Disclaimer.html</p>
                <p>htmlcssReference.html</p>
                <p>MySQL Reference.html</p>
                <p>Team5.html</p>
                <p>Team5.css</p>
                <p>changelog.css</p>
                <p>T5_Tables.sql</p>
            </ul>
        </ul>

        <hr>

<!-- JS: Changed the formating of this version of the changelog. If you think it needs any adjustments, don't hesitate to make them.
         Just make a comment so I know what to look for. 
-->
        <h2>CURRENT VERSION: 1.1.0</h2>
        <p >
            # 2021-11-01 <B>Version 1.1.0</B>
        <ul style="list-style-type: none;">
            <p><b>Verison Summary:</b><br>
                This version presents the incorperation of PHP within the Website. Added Database commands<br> 
                to pull information from the site_db Database giving the admin page access to the tables of information. <br>
                **ALL HTML FILES HAVE BEEN CONVERTED TO PHP!**<br>
                The edited and/or added in this iteration are as follows: </p>
            <p style="margin-right: auto;">Files within this itteration are as follows:</p>

            <ul style="list-style-type: none">
                <p style="font-weight: bold;">PHP File(s): </p>
                <ul style="list-style-type: none">
                    <p>adminpage.php</p>
                    <p>changelog.php</p>
                    <p>DB_Connection.php</p>
                    <p>Disclaimer.php</p>
                    <p>ExplainTables.php</p>
                    <p>footer.php</p>
                    <p>header.php</p>
                    <p>htmlcssReference.php</p>
                    <p>MySQL Reference.php</p>
                    <p>Team5.php</p>
                </ul>
                <p style="font-weight: bold;"> CSS File(s): </p>
                <ul style="list-style-type: none">
                    <p>Team5.css</p>
                    <p>changelog.css</p>
                    <p>MySQL_Reference.css</p>
                </ul>
                <p style="font-weight: bold;"> SQL File(s): </p>
                <ul style="list-style-type: none">
                    <p>T5_Tables.sql</p>
                </ul>
            </ul>
        </ul>

        <hr>

        <h2>CURRENT VERSION: 1.2.0</h2>
        <p >
            # 2021-11-21 <B>Version 1.2.0</B><br>
        <ul style="list-style-type: none;">
            <p><b>Verison Summary:</b>
                This version presents the capability to login the website, login status to each page of the website.<br>
                Added table features to display active records, sort the records, methods to delete records from the site, and have a link<br>
                to add a new record to the file.<br><br>
                The edited and/or added in this iteration are as follows: </p>

            <ul style="list-style-type: none">
                <p style="font-weight: bold;">PHP File(s): </p>
                <ul style="list-style-type: none">
                    <p>ErrorHandler.php</p>
                    <p>footer2.php</p>
                    <p>header2.php</p>
                    <p>InsertingANewRowIntoT5User.php</p>
                    <p>PrintsSetRecActiveT5User.php</p>
                    <p>footer.php</p>
                    <p>header.php</p>
                    <p>htmlcssReference.php</p>
                    <p>MySQL Reference.php</p>
                    <p>Team5.php</p>
                    <p>Team5WithoutLinks.php</p>
                    <p>NewRowT5_Products.php</p>
                    <p>Set_MA_RA_T5Products.php </p>
                    <p>changelog.php </p>
                </ul>
                <p style="font-weight: bold;"> CSS File(s): </p>
                <ul style="list-style-type: none">
                    <p>Team5.css</p>
                    <p>changelog.css</p>
                    <p>MySQL_Reference.css</p>
                    <p>adminpage.css</p>
                </ul>
            </ul>
        </ul>
        <hr>
<!---------------------FINAL VERSION CHANGELOG--------------------->        
        <h2>CURRENT VERSION: 1.3.0</h2>
    <p>
        # 2021-10-11 <B>Version 1.3.0</B>
        <ul style="list-style-type: none;">
            <p><b>Verison Summary:</b><br>
                This is the final version of our project. We added new features to show or hide the add/delete buttons depending<br>
                 on if you are an admin or emlployee. The admins now have private access to the users signed up for the website<br>
                Finally, we added more fine tuning for the input validation checks. </p>
            <p style="margin-right: auto;">A major thank you to all of the constructive criticism from all of the other groups! <br>
                                           For our final version, we are leaving out project files for security.</p>

        </ul>

        <br>
    <footer>

        <br>
        <br>                   
        <br>
        <br>

        <nav>
            <?php
            include "footer.php";
            function by_author (){
                echo "<div class='footer'>";
            
                    define ("FILE_AUTHOR", "<small> 2021 Shapiro </small>");
                    echo "(C)" . FILE_AUTHOR;
                    echo "<br> Jacob's Email <br>";
                    echo "<a href='mailto:jacob.shapiro1@marist.edu'> Shapiro <a>";
            }
            
                echo "</div>";  
            
            ?>
        </nav>
    </footer>

</body>


</html>