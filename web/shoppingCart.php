<?php
    include_once('cartFunctions.php');
    session_start();
    if(!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    
    <title>Super Paint Mart</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >

    <!-- Custom styles for this template -->
    <link rel="stylesheet" type="text/css" href="/css/homeStyle.css">
</head>

<body>

    <main role="main" class="container">

        <div class="starter-template">
            <h1>Only the Prettiest Paint Possible</h1>
            </br></hr>
        </div>
        <div class="table-responsive">
            <table class="table">
                <?php
                    $rows = 2;
                    $columns = 3;
                    $itemNumber = 1;
                    $itemTypes = array( 1 => "Red Paint", 2 => "Blue Paint", 3 => "Yellow Paint", 
                                        4 => "White Paint", 5 => "Grey Paint", 6 => "Black Paint");
                    for ($i = 0; $i < $rows; $i++) {
                        echo "<tr>";
                        for ($j = 0; $j < $columns; $j++) {
                            echo "<td><img class=\"itemImage\" src=\"img/paint".$itemNumber.".png\" alt=\"item number".$itemNumber."\"><br>";
                            echo "<p>".$itemTypes[$itemNumber]."</p>";
                            echo "<input type=\"number\" name=\"item".$itemNumber."\" value=\"0\" id=\"item".$itemNumber."\"><button onclick=\"addToCart(".$itemNumber.", document.getElementById('item".$itemNumber."').value";
                            echo ")\" class=\"button\" type=\"submit\"><span>Add to Cart</span></button>";
                            $itemNumber++;
                            echo "</td>";
                        }
                        echo "</tr>";
                    }
                ?>

            </table>
                           <button class="btn btn-outline-success my-2 my-sm-0" id="cartButton" type="button" onclick="location.href='viewCart.php'"><span>View Cart</span><div id="cartNum">0</div></button>

        </div>
       
    </main>
    <!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <script type="text/javascript" src="/js/shopping.js"></script>

</body>
</html>