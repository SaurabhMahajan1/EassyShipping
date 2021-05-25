
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <style > 
 .my-container{
  margin-left: 50px;
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
  height: 550px; 
}


#regForm {
  background-color:white;
  font-family: 'Roboto',sans-serif;
  font-size: 115%;
  padding: 15px;
  width: 60%;
  min-width: 400px;
}

h1 {
  text-align: center;  
}

input {
  padding: 10px;
  width: 100%;
  font-size: 18px;
  font-family: Roboto,sans-serif;
  border: 1px solid #aaaaaa;
}


/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: ;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Roboto,sans-serif;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #3d0066;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #3d0066;
}

.vodiapicker {
  display:;
  padding: 10px;
  width: 100%;
  font-size: 18px;
  font-family: Roboto,sans-serif;
  border: 1px solid #aaaaaa;
}

.goods{
  display:;
  padding: 10px;
  width: 100%;
  font-size: 18px;
  font-family: Roboto,sans-serif;
  border: 1px solid #aaaaaa;
}

</style>
</head>
<body>
	<body style="background-color: #e6e6e6">
	
  <?php include 'menu.php'; ?>

  <div class="container my-container row justify-content-center">
    <div class="col-12 col-md-5 my-col1" style=" box-shadow: 0px 0px 25px #aaaaaa;">
    <form id="regForm" action="checkfare.php" class="w-40 m-auto" method="post">
  <!-- One "tab" for each step in the form: -->
  <div class="tab"><b style="color: #3d0066">PICKUP CITY</b>
    <p><input placeholder="Enter Pickup City" oninput="this.className = ''" name="pickup" required></p>
    <b style="color: #3d0066">DROP CITY</b>
    <p><input placeholder="Enter Drop City" oninput="this.className = ''" name="drop" required></p>
    <b style="color: #3d0066">TRUCK TYPE (ONLY FULL TRUCK SERVICE)</b><br>
    <select class="vodiapicker" name="trucktype" id = "truck" required>
            <option disabled hidden selected value="" style="color:#000;">Select Truck Type</option>
            <option value="31" >TATA ACE/PICKUP (1.5 TON)</option>
            <option value="37.33" >TATA 407/EICHER 14FT (4 TON)</option>
            <option value="42.90" >EICHER 17FT (5 TON)</option>
            <option value="46.12" >EICHER 19FT (7 TON)</option>
            <option value="45" >20FT CONTAINER (6.5 TON)</option>
            <option value="51" >TATA TRUCK (10 TON)</option>
            <option value="44.52" >32FT CONTAINER (7 TON)</option>
            <option value=" 56.50">32 CONTAINER (14 TON)</option>
            <option value="64.8" >32/40FT OPEN TRAILER (18 TON)</option>    
      </select>
    <b style="color: #3d0066">MOBILE NO</b>
    <p><input placeholder="Mobile no" type="Tel"  name="mobile" required></p>

  </div>
  <div class="tab">
    <b style="color: #3d0066">SELECT PICKUP DATE</b>
    <p><input type="date" oninput="this.className = ''" name="date" required></p>
    <b style="color: #3d0066">DISTANCE</b>
    <p><input type="text" oninput="this.className = ''" name="distance" id="Distance" required></p>
     <b style="color: #3d0066">SELECT GOODS TYPE</b>
    <select placeholder="Select Full Truck Goods Type" class="goods" name="goods" required>
    <option value="" style="color:#000;">Select Full Truck Goods Type</option>
            <option value="Industrial Machinery">Industrial Machinery</option>
            <option value="Household">Household Goods</option>
              <option value="PartLoad Not available">PartLoad / Parcel / luggage transport Request (N.A)</option>
             <option value="Rice Wheat Grains">Rice / Wheat / Grains (N.A)</option>
            <option value="Fruits Vegetables not available">Fresh Fruits / Vegetables (N.A) </option>
            <option value="FMCG Packed Food">FMCG / Packed Food Products</option>
            <option value="Healthcare Products">Healthcare / Pharmacy Products / Medicines</option>
            <option value="Chemicals Liquid Barrels">Chemicals Powder / Liquid Barrels</option>
            <option value="Fertilizer">Fertilizer (N.A)</option>
            <option value="Electronics Home Appliances">Electronic Goods / Home Appliances </option>
            <option value="Packaging Material">Paper / Packaging / Printed Material</option>
            <option value="Electrical Panels Spare Parts">Electrical Transformer / Panels / Equipments / Spare Parts</option>
            <option value="Solar Inverter">Solar / Battery / Inverter Products</option>
            <option value="Ceramic Supplies">Ceramic / Hardware Supplies</option>         
            <option value="Electrical Cables">Electrical Wires / Cables</option>            
            <option value="Books Stationery Toys">Books / Stationery / Toys / Gifts</option>
            <option value="Aluminium Metal Products">Aluminium / Steel / Metal Products</option>          
            <option value="Construction Material">Building / Construction Material</option>
            <option value="Paint Houseware Supplies">Paint / Houseware Supplies</option>
            <option value="Engineering Goods">Engineering Goods</option> 
            <option value="Textile Garments">Textile / Garments</option>
            <option value="Pvc Plastic Materials">Plastic / Pvc / Rubber </option>
            <option value="Machine Auto Parts">Machine / Auto Parts </option>
            <option value="Exhibition Supplies">Exhibitions / Event Supplies</option>         
            <option value="Furniture Plywood">Furniture / Plywood / Laminate</option>       
            <option value="Parcel Service Not available">Parcel & courier service (Not available) </option>
            <option value="Vehicle Transport Not available">Car / Bike transport (Not available)</option>
            <option value="Animal Transport Not available">Animal Transport (Not available)</option>
            <option value="ODC Consignment">ODC Consignment</option>
            <option value="Scrap">Scrap</option>
            <option value="Plants">Plants</option>
            <option value="Others">Others</option>
  </select>
            <b style="color: #3d0066">ENTER WEIGHT (KG)</b>
          <div class="container row">
            <div class=" col-12 col-md-10  ">
            <p><input class="wt" placeholder="Weight (1 TON = 1000 KG)" oninput="this.className = ''" name="weight" required></p> </div>
            <div class=" col-12 col-md-4  ">
               <select class="vodiapicker">
            <option >KG</option>
            </select>
            </div>
          </div>
  </div>
  <div style="overflow:auto;">
    <div style="float:right; padding-top: 10px;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)" class="btn-info ">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)"  class="btn-info " >Next</button>
      <button type="submit" name="" class="btn-info"  > CHECK FARE</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step" href="index.php"></span>
    
  </div>
</form>
</div>
    <div class="col-6 col-md-6 my-col2">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30711243.17762776!2d64.4398422293091!3d20.011408266548177!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30635ff06b92b791%3A0xd78c4fa1854213a6!2sIndia!5e0!3m2!1sen!2sin!4v1619611433980!5m2!1sen!2sin" width="900" height="550" style="border:1px solid gray; box-shadow: 0px 0px 25px #aaaaaa;" allowfullscreen="" loading="lazy"></iframe>
  <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15009.750176402044!2d75.31242926717984!3d19.863737986640864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdb9860cbffffff%3A0xa66e2b579fb7570!2sDeogiri%20Institute%20of%20Engineering%20and%20Management%20Studies%2CAurangabad!5e0!3m2!1sen!2sin!4v1619520271871!5m2!1sen!2sin" width="900" height="550" style="border: 1px solid gray; box-shadow: 0px 0px 25px #aaaaaa;"
" allowfullscreen="" loading="lazy"></iframe>-->

    </div>
  </div>

  <script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>



<?php include 'footer.php' ;?>



</body>
</html>