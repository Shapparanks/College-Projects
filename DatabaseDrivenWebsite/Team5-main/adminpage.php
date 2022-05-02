<!DOCTYPE html>
<html>
<head>
    <title> Snow-Ply Admin </title>
    <meta charset="UTF-8" >
    <meta name="viewport" content="width-device-width, initial-scale=1">
	<link rel="stylesheet" href="./CSS/T5.css">
    <script src="https://kit.fontawesome.com/afd6aa68df.js" crossorigin="anonymous"></script>
    <link rel="icon" href="./IMG/Snow-Ply_logo.png">
</head>
	
<body>
    <?php
        include "ErrorHandler.php";
        include "header.php";
    ?>

<br><br><br><br><br><br>
	

	<h1> Slo-Ply Administrator </h1>
		
	<nav>		
        <a style="text-decoration: none;" href="Team5.php">Home</a>
        <br>
        <a style="text-decoration: none;" href="htmlcssReference.php">HTML/CSS Reference</a>
        <br>
        <a style="text-decoration: none;" href="MySQL Reference.php">MySQL Reference</a>
        <br>
        <a style="text-decoration: none;" href="DB_Connection.php">Database Connection</a>
        <br>
        <a style="text-decoration: none;" href="Team 5 Project Documentations.pdf">Requirements and Design Document</a>
        <br>
        <a style="text-decoration: none;" href="ExplainTables.php">Explain Tables</a>
        <br>
        <a style="text-decoration: none;" href="T5_Users.php">Show Users</a>
	</nav>
		
		
	<footer>

        <br>
        <br>                        <!--GR: just for spacing purposes, can be deleted if you need to. -->
        <br>
        <br><br><br><br><br>

        
        

        <nav>
            <?php
                
                include "footer.php";
                function by_author (){
                    echo "<div class='footer'>";
                
                        define ("FILE_AUTHOR", "<small> 2021 Rogers </small>");
                        echo "(C)" . FILE_AUTHOR;
                        echo "<br> Team 5 Emails <br>";
                        echo "<a href='mailto:christopher.rogers1@marist.edu'> Rogers <a>";
                }
                
                    echo "</div>";
            
            ?>
        </nav>
    </footer>
</body>
	
</html>