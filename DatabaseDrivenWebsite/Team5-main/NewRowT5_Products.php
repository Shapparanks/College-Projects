<!DOCTYPE html>
<!--    NewRowT5_Products.php   
    11/21/2021 JS Original Program 
    -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title> Product Table - Insert</title>
    <link rel="stylesheet" href="./CSS/T5.css">
    <script src="https://kit.fontawesome.com/afd6aa68df.js" crossorigin="anonymous"></script>
    <link rel="icon" href="./IMG/Snow-Ply_logo.png">
    <style>
            .button {
            background-color: blue;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            }
            body{
                margin-top: auto;
                margin-left: auto;
                font-family:arial;
            }
            label {
                display: inline-block;
                width: 125px;
            }

    </style>
</head>

<body>
   

    <main>

<?php
    
    include "ErrorHandler.php";
    include "header.php";

    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";


    echo "<h1> Inserting Data into the Products Table </h1>";
    echo " Enter the data as specified below: ";

    require ("../connect_db.php");

    
    #---------- Initialize varaibales for products table values ---------#

    $error_message="";                         # set this variable during input validation 

    if (isset($_POST['Model_Number'])){
        $model_number = $_POST['Model_Number'];
    }
    else {
        $model_number = "";
    }

    if (isset($_POST['RecActive'])){
        $RecActive = $_POST['RecActive'];
    }
    else {
        $RecActive = "";
    }
    if (isset($_POST['quantity'])){
        $quantity = $_POST['quantity'];
    }
    else {
        $quantity = "";   
    }
    if (isset($_POST['product'])){
        $product = ucwords($_POST['product']);
    }
    else {
        $product = "";
    }
    if (isset($_POST['price'])){
        $price = $_POST['price'];
    }
    else {
        $price = "";
    }
    if (isset($_POST['supplier'])){
        $supplier = $_POST['supplier'];
    }
    else {
        $supplier = "";
    }


    
    #-----------Input Validation ------------
    // Input Validation for Model Number
    if ($_SERVER['REQUEST_METHOD'] == "POST"){
        if (trim($model_number) == ""){
            $error_message = 'Model Number must not be blank!';
        }

        // Input Validation for Record Activty 
        else if (trim($RecActive) == ""){
            $error_message = 'Record Activity must not be blank!';
        }

        // Input Validation for quanitty  
        else if (trim($quantity) == ""){
            $error_message = 'Quantity must not be blank!';
        }

        // Input Validation for product
        else if (trim($product) == ""){
            $error_message = 'Product Name must not be blank!';
        }

        else if (trim($price) == ""){
            $error_message = 'Price must not be blank!';
        }
        else if (trim($supplier) == ""){
            $error_message = 'Supplier Name must not be blank!';
        }
    }
    

    // error meassages  
    echo "<p style='color:red;'> " . $error_message . "</p>";

    //-------------Form action for users to input values ------------------------------
    if ($_SERVER['REQUEST_METHOD'] == "GET" || $error_message != ""){
        //Form to process differnet sort options 
        echo "<form action='" . $_SERVER['SCRIPT_NAME'] . "' method='POST'>";
        echo "<br><label>Model Number:</label><input type='text' name='Model_Number' value='$model_number'>";

        echo "<br><label> Record Activity:</label><select name='RecActive'>";
        echo "      <option value='A'> Active </option>";
        echo "      <option value='S'> Suspended </option>";
        echo "      <option value='D'> Deleted </option>";
        echo "     </select>";

        echo "<br> <label>Quantity:     </label> 
        <input type='number' name='quantity' value='$quantity' >";

        echo "<br> <label>Product name: </label> 
        <input type='text' name='product'    value='$product'>";

        echo "<br> <label>Price:        </label> 
        <input type='text' name='price'      value='$price'>";

        echo "<br> <label>Supplier name:</label> 
        <input type='text' name='supplier'   value='$supplier'>";

        echo "<br><br>                           
        <input type='submit' value='Submit!' style='color: white; background: blue;'>";

        echo "                                   
        <input type = 'button' style='color: white; background: blue;' value = 'Go Back' onclick='history.go(-1)'>";
        echo "</form>";
    } 
    
      //------------------Inserts values into the Table -----------------------------------
    else if ($_SERVER['REQUEST_METHOD'] == "POST" || $error_message == ""){
        $q = "insert into t5_products values ('$model_number', '$RecActive', '$quantity', '$product' ,'$price', '$supplier')";
        $r = mysqli_query ($dbc, $q);   

        if ($r){
            echo " <h3> Success! Thank you for adding the information for Model Number: $model_number! </h3>";
            echo "<a href='T5_Products.php' class='button'>RETURN TO PRODUCTS TABLE</a>";
        }
        else {
            echo "<br>" . mysqli_error($dbc);
        }
    }
    
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";


    include "footer.php";
    function by_author (){
        echo "<div class='footer'>";
    
            define ("FILE_AUTHOR", "<small> 2021 Shapiro </small>");
            echo "(C)" . FILE_AUTHOR;
            echo "<br> Jacob's Email: <br>";
            echo "<a href='mailto:Jacob.Shapiro1@marist.edu'> Shapiro </a>";
        }
    
        echo "</div>";

    
?>

    </main>
    
</body>
</html>