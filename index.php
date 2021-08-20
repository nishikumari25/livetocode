<!DOCTYPE html>
<html>
<head>
	<title></title>
	

	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="css/style.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <link href="https://fonts.googleapis.com/
  css?family=Josefin+Sans&display=swap" rel="stylesheet">

  
 

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link href="https://fonts.googleapis.com/css?family=Abril+Fatface[Dancing+Script" rel="stylesheet">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



  


</head>

<body class="container">
	<h1 class="text-center text-danger mb-4 pb-4" style="font-family: 'Abril Fatface';">ONLINE SHOPPING CART PHP MYSQLI
	</h1>
	
<div class="row">

<?php

$server="sql109.epizy.com";
$username="epiz_29467998";
$password="Jtn06DruFkxl";
$dbname="epiz_29467998_cartdb";


$con = mysqli_connect($server,$username,$password,$dbname);

//mysql_select_db($con,'shoppingcart');
// mysqli_select_db is no longer supported in this version of php. so to make a connection, pass the database argument here in $con variable.

// u can check by writing code of if else() to check the connection is done or not as done previously in userinfo.php



$query = "SELECT `name`, `image`, `price`, `discount` FROM `carttable` order by id asc ";

// now firing a query
$queryfire = mysqli_query($con,$query);

$num = mysqli_num_rows($queryfire);

if($num > 0)
{
while($product = mysqli_fetch_array($queryfire))
{

?>

<div class="col-lg-3 col-md-3 col-sm-12">
	
<form>
	
	<div class="card">
		
		<h6 class="card-title bg-info text-white pb-2 text-uppercase"> 
<?php echo $product['name']; ?>
		</h6>

		<div class="card-body">
			<img src = "<?php echo $product['image']; ?>" alt="PHONE IMAGES" class="img-fluid mb-2">

<h6> &#8377; <?php echo $product['price']; ?>

<span> (<?php echo $product['discount']; ?>% off)</span>

</h6>

<h6 class="badge badge-success">4.4 <i class="fa fa-star"> </i></h6>

<input type="text" name="" class="form-control" placeholder="Quantity">

</div>

<div class="btn-group d-flex">
	<button class="btn btn-success flex-fill">Add to cart</button>
	<button class="btn btn-warning flex-fill">Buy Now</button>
</div>


	</div>
</form>

</div>

<?php

}

}



?>




</div>
</body>
</html>