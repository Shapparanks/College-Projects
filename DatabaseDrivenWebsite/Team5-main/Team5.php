<!DOCTYPE html>
<!--    Team5.php   
    11/10/2021 GR, CR, JS Original Program 
    -->
<html>
    <head>
        <title> Snow-Ply </title>
        <meta charset="UTF-8" >
        <meta name="viewport" content="width-device-width, initial-scale=1">
        <link rel="stylesheet" href="CSS/T5.css"> <!--JS: Changed file name. NOT USING MYSQLREFERENCE ANYMORE. THAT IS WHAT WAS CAUSING ISSUES. -->
        <script src="https://kit.fontawesome.com/afd6aa68df.js" crossorigin="anonymous"></script>

        <link rel="icon" href="./IMG/Snow-Ply_logo.png">
    </head>
<body>

    <!-- Top navigational bar -->
    <?php
        include "ErrorHandler.php";
        include "header.php";

    ?>
    <!-- JS: Added background imagine into home file-->
    <style>  

        body{
            background-image: url("https://i.pinimg.com/originals/0e/53/b9/0e53b9867b6dd6372a42739e4e368526.gif");
            background-repeat: no-repeat;
        }
    </style>

 <br><br> <!--GR: For spacing the sale sign-->
<!-- Sale that runs continuously on front page (Still have to makes some adjustments to that)-->
    <h3 class="sale">
        <marquee direction = "left" scrollamount="12">
        WELCOME TO SNOW-PLY! 
        <!-- ALL SNOW EQUIPMENT ON SALE NOW! -->         <!-- GR: Changed this to "WELCOME TO SNOW-PLY!" -->
    </marquee>
    </h3>

     <!--description of company  -->
     <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>


     
     
     <div class="description">
         <p class=""></p>
        <h2 class=""> WHO ARE WE? </h2>
            <p class="">For people who are looking for a web application to track a business's inventory – products,
                orders, suppliers, etc. for snow related equipment, our website, Snow-Ply, gives you the
                opportunity to rent or buy skis, snowboards, and other snow related equipment. Snow-Ply creates
                sales/purchase orders, sets auto reorder points, makes sure the flow of orders is smooth in and
                out, and more (Inventory management, n.d.). Unlike what other services offer, our company is
                fast and reliable in bringing our products to you!</p>
            </div>
            
			<br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> 
		
		<div class="description">
			<p class=""></p>
		<h1 class=""> Featured Gear </h1>
			&emsp; &emsp;
			<a href="">
				<img src="https://th.bing.com/th/id/R.28915c06164d5e1e404b09a6b9d38bdb?rik=hl4443%2bIytRF2w&riu=http%3a%2f%2fcdn.shopify.com%2fs%2ffiles%2f1%2f1439%2f2464%2ffiles%2fFullSizeRender_-_Copy_2048x2048.jpg%3fv%3d1510875924&ehk=qWNBiwunfGMatxRrTYX%2boqv9RcuAwxt7PBOnO1DZNuM%3d&risl=&pid=ImgRaw&r=0" width="475" height="475"> </a>
			<a href="">
				<img src="https://rmcorp.s3.scarfbot.com/badger/u/common/photos/products/2019/10/15/087453ccd7b07931ca8083c8c9bcb28e/snowboard-gravity-voayer-no-color-women-s-2.jpg?size=350,400" width="475" height="475"> </a>
			<a href="">
				<img src="https://th.bing.com/th/id/R.9fe8924d081ba9762f94106db4241914?rik=i0TBZ%2fmgFqaj%2bQ&riu=http%3a%2f%2fimages.evo.com%2fimgp%2f1500%2f58003%2f299153%2ffull-tilt-classic-ski-boots-2013-black-red.jpg&ehk=TBYprdgVg5N%2fLCDQnF8LCKZzyI9KuaaINmiF3JLac1s%3d&risl=&pid=ImgRaw&r=0" width="475" height="475"> </a>
			<h3> &emsp; &emsp; &emsp;&emsp; &emsp;<a href="">Meier Skis</a> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;&emsp; &emsp;&emsp;&emsp; &emsp; &emsp;&emsp; &emsp; <a href="">GraVity Snowboards</a>&emsp; &emsp;&emsp; &emsp;&emsp; &emsp;&emsp; &emsp; &emsp;&emsp; &emsp; &emsp; &emsp;  <a href="">Full Tilt Boots</a> &emsp; </h3>
		
<!-- Footer for the website to house listed items-->
    <footer>

        <br>
        <br>                        <!--GR: just for spacing purposes, can be deleted if you need to. -->
        <br>
        <br>

        <nav>
            <?php
                
            include "footer.php";
            function by_author (){
                echo "<div class='footer'>";
            
                    define ("FILE_AUTHOR", "<small> 2021 Roma, Rogers, & Shapiro </small>");
                    echo "(C)" . FILE_AUTHOR;
                    echo "<br> Team 5 Emails <br>";
                    echo "<a href='mailto:christopher.rogers1@marist.edu'> Rogers <a>
                    <a href='mailto:gina.roma1@marist.edu'> Roma <a>
                    <a href='mailto:jacob.shapiro1@marist.edu'> Shapiro <a>";
            }
            
                echo "</div>";
            
            ?>
        </nav>
    </footer>

</body>

</html>