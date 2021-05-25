<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style >
  	.my-container{
  margin-left: 190px;
  margin-right: 30px;
  margin-top: 20px;
}
.my-col2{
margin-left: 20px;
margin-bottom: 20px;
border: 0px solid gray;
height: 400px;

}

.my-col1{
  background-color: white;
  border: 1px solid gray;
  margin-bottom: 20px; 
  height: 530px; 
}
.btn {
			padding: 6px;
			font-size: 19px;
			color: white;
			background:#fa6f1e ;
			border-radius: 5px;
			border: none;
			text-align: center;
			font: bold;
			box-shadow: 0px 0px 5px;
		}

  </style>
</head>
<body style="background-color: #e6e6e6">
	<?php include 'menu.php'; ?>
	<div class="container my-container row ">
    <div class="col-12 col-md-12 my-col1" style="box-shadow: 0px 0px 25px #aaaaaa; padding-top:  30px!important; padding-left-right: 25px!important;">
    	<div class="panel panel-default" style="background-color:  indigo; height: 40px; text-align: left;border: 1px ; padding-top: 8px; box-shadow: 0px 0px 5px"> <b><h class="text-white ml-2">YOUR BOOKING IS ALMOST DONE</h></b></div>
    	<div class="panel-body" style="border: 1px solid gray; border-color: #a6adac; height: 250px; box-shadow: 0px 0px 5px">
    		<div class="row justify-content-around">
    		<div class="col-12 col-md-5" style=" padding-left-right: 25px!important; padding-top: 35px; height: 240px; text-align: center;  "> <h5 style="color: #fa6f1e;"><b>ESTIMATE FARE</b></h5>
    			<h3><b style="color:red;">
         <?php  
         $a = $_POST['trucktype'];
         $b = $_POST['distance'];
         echo "Rs. ",$a * $b; ?>   
          </b></h3>
    			<h5 style="color: #3d0066;" class="my-3">(Final Fare can be less or Higher depends on Market Rate & Truck Availability)</h5>

    		</div>
    		<div class="col-12 col-md-5 " style=" padding-left-right: 20px!important; height: 240px;"> 
    			<div class="col justify-content-around my-3 " style="color:#3d0066;">
    			<div class="row py-2 pl-1" style="border: 1px solid; border-color: #a6adac;"><h5 class="my-2" >We Value your Privacy.</h5>
					We will not sell or distribute your contact information. Read our Privacy Policy</div>
    			<div class="row py-2 pl-1" style="border: 1px solid; border-color: #a6adac;"><h5 class="my-2">Billing Inquiries</h5>
					Do not hesitate to reach our support team if you have any queries.</div>
    		</div>
    		</div>
    	</div>
    	</div>
    	<div class="row justify-content-md-center my-4">
    	<div class="col text-center">
    		<button type="submit" name="" class="btn mx-2" style="box-shadow: 5px 5px 5px #aaaaaa"><b class="mx-2">COBFIRM BOOKING</b></button>
    		<button type="submit" name="" class="btn mx-2" style="box-shadow: 5px 5px 5px #aaaaaa"><b class="mx-2">REQUEST CALL BACK</b></button>
    		<button type="submit" name="" class="btn mx-2" style="box-shadow: 5px 5px 5px #aaaaaa"><b class="mx-2">GO BACK</b></button>
    	</div>
    </div>
    
    </div>
    
</div>
<script src="Script.js"></script>
<?php  include 'footer.php'; ?>
</body>
</html>