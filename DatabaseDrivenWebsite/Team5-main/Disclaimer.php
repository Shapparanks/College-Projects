<!DOCTYPE html>
<!--     Disclaimer.html      
         Website Disclaimer to be displayed on homepage footer !-->
    <html lang="en">

    <head>
        <title> Legal Disclaimer </title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="./CSS/T5.css">
        <script src="https://kit.fontawesome.com/afd6aa68df.js" crossorigin="anonymous"></script>
        <link rel="icon" href="./IMG/Snow-Ply_logo.png">
        <style> 
            h1{
                text-align: center; color:black
            }
            ul{
                display: block; margin: auto; 
                font-family:'Lucida Sans', 'Lucida Sans Regular', 
                'Lucida Grande', 'Lucida Sans Unicode', Verdana, sans-serif;
                font-size: large;  width: 1100px;
                margin-bottom: 40px;
            }
            .cri{
              width: 600px;
              height: 450px;
              display: block;
              margin-left: auto;
              margin-right: auto;
            }

        </style>
    </head>

    <body>

        <header>
            <?php
            include "ErrorHandler.php";
            include "header.php";

            ?>
            
            <br><br><br><br><br><br>
            <h1><b> <emphasis> LEGAL DISCLAIMER </emphasis></b> </h1>
         
            </header>
            <!-- Class to show legit legal statement -->
            <div class = "Copywrite paragraph">
                <ul style="list-style-type:none;">
                    <li>This website may contain copyrighted material, the use of which may not have been specifically
                        allowed by the copyright owner. This material is avaliable in an effort to explain the 
                        relevant tags used in HTML and CSS for educational purposes. The content within this document was made to help me,
                        Jacob Shapiro, utilize HTML and CSS tags for future assignments in Software Development II.

                    </li>
                    <p></p>
                    <li> This should be considered as "fair use" of any copyrighted material within the website.
                    </li>
                    <p></p>

                    <li> If you wish to use any of the copyrighted material within this document for your own documentation
                        that may go beyond "fair use", you must recieve permission from the copyright owner.

                    </li>
                </ul>
            </div>

            <img src="https://www.remfryson.com/_images/copyright1.jpg" class="cri">

            <footer>

                <br>
                <br>                        <!--GR: just for spacing purposes, can be deleted if you need to. -->
                <br>
                <br>

                <nav>
                    <?php
                        
                        include "footer.php";
                        #--------------------Footer function to show author of page--------------------
                        function by_author (){
                           echo "<div class='footer'>";
                       
                               define ("FILE_AUTHOR", "<small> 2021 Shapiro </small>");
                               echo "(C)" . FILE_AUTHOR;
                               echo "<br> Jacob's Email: <br>";
                               echo"<a href='mailto:jacob.shapiro1@marist.edu'> Shapiro <a>";
                       }
                       
                           echo "</div>";
                    
                    ?>
                </nav>
            </footer>

    </body>
</html> 