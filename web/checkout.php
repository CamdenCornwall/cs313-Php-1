<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Check Out</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" type="text/css" href="/css/homeStyle.css">
</head>

<body>
    <main role="main" class="container">

    <h1>Checkout</h1>
        
        <div class="center">
        <h3><strong>Enter your Address</strong></h3><br>
            <form onsubmit="confirm.php" method="POST" target="_blank">
                Full Name:<br>  
                <input type="text" name="name" required>
                <br>
                Street:<br>
                <input type="text" name="street" required>
                <br>
                City:<br>
                <input type="text" name="city" required>
                <br>
                State:<br>
                <input type="text" name="state" required>
                <br>
                Zip Code:<br>
                <input type="text" name="zip" required><br>
                <button type="submit" class="btn btn-success" onsubmit="location.href='confirm.php'">Ok</button>
                <br><br><hr>
                <button type="reset" class="btn btn-danger" onclick="location.href='shoppingCart.php'">Cancel</button>
            </form>
        </div>
        
    </main>
 
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>
</html>