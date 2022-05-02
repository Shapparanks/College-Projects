<!DOCTYPE html>
<!--    header2.html   
    11/07/2021 GR Original Program 
    This is only used on the LoginPage
    -->
<html lang="en">

<head>
    <meta charset="UTF-8">
</head>

<body>
<!-- Top navigational bar -->
<nav class="navbar">
        
        <ul class="navhyperlinks">
            <li><img src="./IMG/Snow-Ply_logo.png" width="55" height="55"></li> <!--GR: Added logo in top nav.-->
            <li><a style="text-decoration: none;" href="LoginPage.php?option=IN">Login</a></li>
            

            <!-----------Session Variables --------------------------------------------------------------->
            <li><?php
            session_start();
            if (isset($_SESSION["logins_status"])){
                $logins_status = $_SESSION["logins_status"];
            }
            else {
                $logins_status = "<div style='color: white;'>NOT LOGGED IN</div>";
            }
            echo "<br ><p style='color: white;'>" . $logins_status;
            
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