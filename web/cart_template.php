<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
      <!-- compatitbility meta -->
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <!--  Mobile meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

<title>Simple shopping cart - Discussdesk</title>

   <!--[if lt IE 9]>
 <script src="js/html5shiv.min.js"></script> 
<script src="js/respond.min.js"></script>
    <![endif]-->
<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<script type="text/javascript" src="js/jquery.js"></script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>

<body>
 
	<div class="container" >
    <?php if(@$msg){ ?>
		<div class="alert alert-danger" role="alert">
          <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
          <span class="sr-only"></span>
          <?=$msg?>
        </div>
		
	<?php 	} ?>
    <div class="panel panel-default">
      <!-- Panel of the ordered items in cart -->
      <div class="panel-heading">Your cart <?php if (@$items_number < 1){ echo" is empty"; }?></div>
      
    
      <!-- Table -->
		<table class="table"> 
        	<thead>
            	 <tr> <th>#</th> <th>item name</th> <th>quantity</th> <th>price</th><th>control</th> </tr> 
            </thead>
             
            <tbody> 
            <?php if (@$items_number >= 1){ // if order have one item or more loop in it and make a list of items in cart
				$n = 1;
				$total = 0;
				while($item = mysqli_fetch_array($cart_data)){
					
				 ?>
                <tr> <th scope="row"><?=$n?></th> <td><?=$item['item_name']?></td> <td><?=$item['quantity']?></td> <td><?=$item['price']?>$</td> <td><a href="cart.php?do=delete&id=<?=$item['id']?>"><span class="btn btn-danger" >remove </span></a>   <a href="cart.php?do=add_one&id=<?=$item['id']?>"><span class="btn btn-success" >+ </span></a> <a href="cart.php?do=remove_one&id=<?=$item['id']?>"><span class="btn btn-warning" >- </span></a>  </td> </tr>
                <?php
				$n++;
				$total +=$item['price'];
				 }}?>
 
            </tbody> 
            <tfoot>
            	 <tr> <th>#</th> <th>total</th> <th></th> <th><?php echo(@$total)?$total:'0'; ?>$</th> <th></th></tr>
            </tfoot>
		</table>
        <div class="panel-body btn-group btn-group-justified">
        <div class="panel-footer" >
        	<div class="btn-group col-md-4" role="group">
              <a href="cart.php?do=delete_all"><span class="btn btn-default col-md-8" >empty cart</span></a>
 
          </div>
          <div class="btn-group col-md-4" role="group">
          	<a href="submit_order.php"><span class="btn btn-default col-md-8" >submit order</span></a>
          </div>

          </div>
        
      </div>
    </div>
    <!-- Items and its forms where you can add new items -->
    <div class="row">
  
    <div class="col-md-3 simpleCart_shelfItem">   
<div class="panel panel-default">
     <div class="panel-heading item_name">T shirt </div>
  <div class="panel-body">
 <img src="img/t-shirt.jpg" class="img-thumbnail img-responsive item_thumb"><br> 
     <p class='input-sm clearfix'>Description of the product </p><span class='row'></span>
  </div>
  <div class="panel-footer"> <p class="item_price">$ 88</p>
  <form method="post" action="?do=add" >
  <input type="submit" class='btn btn-danger btn-md item_add' value="ADD" >
 
  
      <label>Qty: <input class="item_Quantity form-control" type="text"  name="quantity" value="1"></label>
    <input type="hidden" name="item_number" value="1">
    <input type="hidden" name="item_name" value="Tshirt">
     <input type="hidden" name="item_price" value="88">  
    </form>  
     </div>
</div>
</div><!-- end object -->

 <div class="col-md-3 simpleCart_shelfItem">   
<div class="panel panel-default">
     <div class="panel-heading item_name">Pant</div>
  <div class="panel-body">
 <img src="img/pant.jpg" class="img-thumbnail img-responsive item_thumb"><br>Description
  </div>
  <div class="panel-footer"><p class="item_price">$ 38</p>  
    <form method="post" action="?do=add" >
  <input type="submit" class='btn btn-danger btn-md item_add' value="ADD" >
    <label>Qty: <input class="item_Quantity form-control" type="text" name="quantity" value="1"></label>
    <input type="hidden" name="item_number" value="2">
    <input type="hidden" name="item_name" value="pant">  
         <input type="hidden" name="item_price" value="38"> 
    </form>  
    </div>
</div>

</div><!-- end object -->
     <div class="col-md-3 simpleCart_shelfItem">   
<div class="panel panel-default">
     <div class="panel-heading item_name">Jacket</div>
  <div class="panel-body">
  <img src="img/jacket.jpg" class="img-thumbnail img-responsive item_thumb"><br>Description
  </div>
  <div class="panel-footer"><p class="item_price">$ 348</p> 
    <form method="post" action="?do=add" >
  <input type="submit" class='btn btn-danger btn-md item_add' value="ADD" >
  <label>Qty: <input class="item_Quantity form-control" type="text"  name="quantity" value="1"></label>
      <input type="hidden" name="item_number" value="3">
    <input type="hidden" name="item_name" value="jacket">  
         <input type="hidden" name="item_price" value="38">    
    </form>  
  </div>
</div>
</div>
</div>
    	
	</div>


<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>

</body>
</html>