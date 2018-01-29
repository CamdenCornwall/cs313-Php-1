<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Check Out</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" type="text/css" href="/css/homeStyle.css">
</head>

    
<body>
    <main role="main" class="container">

        <div class="starter-template">
            <h1>Confirm Purchase</h1>
        </div>
        <div>
                <?php
                    $name = htmlspecialchars($_REQUEST["name"]);
                    $street = htmlspecialchars($_REQUEST["street"]);
                    $city = htmlspecialchars($_REQUEST["city"]);
                    $state = htmlspecialchars($_REQUEST["state"]);
                    $zip = htmlspecialchars($_REQUEST["zip"]);
                    
                    echo "<h3>Address</h3><br/>";
                    echo "<p>".$name."<br/>";
                    echo $street."<br/>";
                    echo $city.", ".$state." ".$zip."</p><br/>";
                    
                    echo "<h3>Items</h3><br/>";
                    echo "<table class=\"table\">";
                    
                    $rows = sizeof($_SESSION["cart"]);
                    $itemTypes = array( 1 => "Red Paint", 2 => "Blue Paint", 3 => "Yellow Paint", 4 => "White Paint",
                                         5 => "Grey Paint", 6 => "Black Paint");
                    for ($i = 0; $i <= 7; $i++) {
                        if(isset($_SESSION["cart"][$i]) && $_SESSION["cart"][$i]["quantity"] > 0) {
                            echo "<tr class=\"".($i + 1)."\"><td><img class=\"smItemImage\" src=\"img/paint".($i + 1).".png\" alt=\"item number".($i + 1)."\"></td>";
                            echo "<td>".$itemTypes[$i + 1]."</td><td>Quantity: ".($i + 1)."</td></tr>";
                        }
                        if($rows == 0) {
                            echo "<div class=\"starter-template\"><h1>No Items To Display</h1></div>";
                        }
                    }
                    echo "</table>";
                    session_unset();
                    session_destroy();
                ?>
        </div>
        <!-- <nav class="navbar fixed-bottom">
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                
            </ul>
               <button class="btn btn-outline-success my-2 my-sm-0" id="cartButton" type="button" onclick="location.href='viewCart.php'">
               <span>View Cart</span><div id="cartNum">0</div></button>
        </div>
    </nav> -->
    </main>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>
</html>