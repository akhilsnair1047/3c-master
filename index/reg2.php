<!DOCTYPE html>
<html lang="en">


<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>

<meta charset="UTF-8">


<title>SpadeEMS Registration Form</title>

<link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
<link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">

<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

<link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
<link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

<link href="css/main.css" rel="stylesheet" media="all">
</head>
<body>
<div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
<div class="wrapper wrapper--w680">
<div class="card card-4">
<div class="card-body">
<h2 class="title">Registration Form</h2>
<form method="POST" action="PaytmKit/PgRedirect.php">
<div class="row row-space">
<div class="col-2">
<div class="input-group">
<label class="label">first name</label>
<input class="input--style-4" type="text" name="first_name" required>
</div>
</div>
<div class="col-2">
<div class="input-group">
<label class="label">last name</label>
<input class="input--style-4" type="text" name="last_name" required>
</div>
</div>
</div>
<div class="row row-space">
<div class="col-2">
<div class="input-group">
<label class="label">Age</label>
<div class="input-group-icon">
<input class="input--style-4 " type="text" name="birthday" required>

</div>
</div>
</div>
<div class="col-2">
<div class="input-group">
<label class="label">Gender</label>
<div class="p-t-10">
<label class="radio-container m-r-45">Male
<input type="radio" value="Male" checked="checked" name="gender">
<span class="checkmark"></span>
</label>
<label class="radio-container">Female
<input type="radio"value="Female" name="gender">
<span class="checkmark"></span>
</label>
</div>
</div>
</div>
</div>
<div class="row row-space">
<div class="col-2">
<div class="input-group">
<label class="label">Email</label>
<input class="input--style-4" type="email" name="email" required>
</div>
</div>
<div class="col-2">
<div class="input-group">
<label class="label">Phone Number</label>
<input class="input--style-4" type="text" name="phone" required> 
</div>
</div>

<div class="input-group">
<label class="label">Refferal</label>
<input class="input--style-4" type="text" name="ref" required>

</div>
</div>
<div class="input-group">
<label class="label">City</label>
<input class="input--style-4" type="text" name="city" required>

</div>
<div class="input-group">
<label class="label">State</label>
<input class="input--style-4" type="text" name="state" required>

</div>
    <div class="input-group">
<label class="label">Order ID</label>
        <input type="text" class="form-control" id="ORDER_ID" name="ORDER_ID" size="20" maxlength="20" autocomplete="off" tabindex="1" value="<?php echo  "SPADE-ORDS" . rand(10000,99999999)?>">
    </div>
    <div class="input-group">
<label class="label">Customer ID</label>
        <input type="text" class="form-control" id="CUST_ID" name="CUST_ID" maxlength="12" size="12" autocomplete="off" tabindex="2" value="<?php echo  "SPADE-CUST" . rand(10000,99999999)?>">
    </div>
    <div class="input-group">
        <input type="hidden" class="form-control" id="INDUSTRY_TYPE_ID" name="INDUSTRY_TYPE_ID" maxlength="12" size="12"  autocomplete="off" tabindex="3" value="Retail">
    </div>
    <div class="input-group">
        <input type="hidden" class="form-control" id="CHANNEL_ID" name="CHANNEL_ID" maxlength="12" size="12" autocomplete="off" tabindex="4" value="WEB">
    </div>
    <div class="input-group">
<label class="label">Amount</label>
<input type="text" class="form-control" id="" name="" autocomplete="off" tabindex="5" value="₹99">
        <input type="hidden" class="form-control" id="TXN_AMOUNT" name="TXN_AMOUNT" autocomplete="off" tabindex="5" value="99"> 
    </div>
    
<div class="p-t-15">
<button class="btn btn--radius-2 btn--blue" type="submit">Submit</button>
</div>
</form>
</div>
</div>
</div>
</div>

<script src="vendor/jquery/jquery.min.js" type="726b3e5fe86168ea16cc3c5c-text/javascript"></script>

<script src="vendor/select2/select2.min.js" type="726b3e5fe86168ea16cc3c5c-text/javascript"></script>
<script src="vendor/datepicker/moment.min.js" type="726b3e5fe86168ea16cc3c5c-text/javascript"></script>
<script src="vendor/datepicker/daterangepicker.js" type="726b3e5fe86168ea16cc3c5c-text/javascript"></script>

<script src="js/global.js" type="726b3e5fe86168ea16cc3c5c-text/javascript"></script>


<script src="../../../../ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="726b3e5fe86168ea16cc3c5c-|49" defer=""></script></body>

<!-- Mirrored from colorlib.com/etc/regform/colorlib-regform-4/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Jun 2020 11:17:58 GMT -->
</html>
