<!DOCTYPE html>
<!--    header.html   
    11/07/2021 GR Original Program 
    File to display the header on ever page (This header file is only seen after logging in)
    -->
<html lang="en">

<head>
    <link rel="stylesheet" href="./CSS/T5.css">
    <meta charset="UTF-8">
</head>

<body>
<!-- Top navigational bar -->
<nav class="navbar">
        
        <ul class="navhyperlinks">
            <li><a href="Team5.php"><img src="./IMG/Snow-Ply_logo.png" width="55" height="55"></a></li> <!--GR: Added logo in top nav.-->
            <li><a style="text-decoration: none;" href="T5_Products.php">Show Equipment</a></li>
            <li><a style="text-decoration: none;" href="T5_Suppliers.php">Show Suppliers</a></li>
			
            <?php 
               session_start();
               if (isset($_SESSION['login_type'])){
                    $login_type = $_SESSION['login_type'];                //Added
                    // echo "<li><a style='text-decoration: none;' href='LoginPage.php?option=OUT'>Logout</a></li>";
                }
                else {
                    $login_type = "";
                    echo "<li><a style='text-decoration: none;' href='LoginPage.php?option=IN'>Login</a></li>";
                }
                if ($login_type == 'Admin'){
                    echo "<li><a style='text-decoration: none;' href='adminpage.php' >Admin-Page</a></li>";
                }  
                if ($login_type = $_SESSION['login_type']){
                    echo "<li><a style='text-decoration: none;' href='LoginPage.php?option=OUT'>Logout</a></li>";
                }
            ?>

            <!-----------Session Variables --------------------------------------------------------------->
            <li><?php
            //session_start();
            if (isset($_SESSION["logins_status"])){
                $logins_status = $_SESSION["logins_status"];
            }
            else {
                $logins_status = "<div style='color: white;'>NOT LOGGED IN</div>";
            }
            echo "<br ><p style='color: white;'>" . $logins_status;

           
            // session_start();
            //  if (isset($_SESSION["logins_status"])){
            //     $logins_status = $_SESSION["logins_status"];
            // }
            // else {
            //     $logins_status = "<div style='color: white;'>NOT LOGGED IN</div>";
            // }
            // echo "<br ><p style='color: white;'>" . $logins_status;
            ?></li>
        </ul>
    <!-- Search bar -->
        <div class="searchbox">
                <input type="text" class="searchinput" name="txt" 
                onmouseout="document.search.txt.value = ''">
            </form>
                <i class="fas fa-search"></i>
        </div>
        

    </nav>
</div>

</body>
</html>