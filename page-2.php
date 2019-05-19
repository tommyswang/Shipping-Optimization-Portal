<?php
require('config.php');
 ?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>New Shipment Info</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600' rel='stylesheet'>

    <link href="styles.css" rel='stylesheet'>

</head>
<body>
  <form action="index.php" method="post">
    <div class="headerdiv"><p id="header">New Shipment Quote</p></div>
        <div id="myProgress">
            <div id="myBar">33%</div>
        </div>
</div>
<div class="pickup-section">
  <div class="pickup-address">
    <div class="form-group col-md-6">
      <label for="pickup-name">Pickup Name</label>
      <input type="text" class="form-control" id="pickup-name" name="from_name" >
    </div>
    <div class="form-group col-md-6">
      <label for="pickup-address">Pickup Address</label>
      <input type="text" class="form-control" id="input-address" name="from_address">
    </div>

    <div class="form-group">
      <label for="pickup-city">City</label>
      <input type="text" class="form-control" id="pickup-city" name="from_city">
    </div>
    <div class="form-group">
      <label for="pickup-state">State</label>
      <input type="text" class="form-control" id="pickup-state" name="from_state" >
    </div>
    <div class="form-group">
      <label for="pickup-postal">Postal Code</label>
      <input type="text" class="form-control" id="pickup-postal" name="from_postal" >
    </div>
  </div>
  </div>

<div class="delivery-section">
  <div class="ship-address">
    <div class="form-group col-md-6">
      <label for="ship-name"> Name</label>
      <input type="text" class="form-control" id="ship-name" name="to_name" >
    </div>
    <div class="form-group col-md-6">
      <label for="ship-address">Delivery Address</label>
      <input type="text" class="form-control" id="input-address" name="to_address" >
    </div>

    <div class="form-group">
      <label for="ship-city">City</label>
      <input type="text" class="form-control" id="ship-city" name="to_city" >
    </div>
    <div class="form-group">
      <label for="ship-state">State</label>
      <input type="text" class="form-control" id="ship-state" name="to_state" >
    </div>
    <div class="form-group">
      <label for="ship-postal">Postal Code</label>
      <input type="text" class="form-control" id="ship-postal" name="to_postal" >
    </div>
  </div>
  </div>

<div class="shipment-details">
  <div class="form-group col-md-6">
    <label for="weight">Weight</label>
    <input type="text" class="form-control" name="weight_value" id="weight">
  </div>
  <div class="form-group col-md-4">
    <label for="unit_weight">Unit</label>
    <select id="unit_weight" name="unit_weight" class="form-control">
      <option value="pound">lbs</option>
      <option value="kilogram">kg</option>
    </select>
  </div>

<br>
  <div class="form-group col-md-6">
    <label for="width">Width</label>
    <input type="text" class="form-control" name="width_value" id="width">
  </div>
  <div class="form-group col-md-6">
    <label for="length">Length</label>
    <input type="text" class="form-control" name="length_value" id="length">
  </div>
  <div class="form-group col-md-6">
    <label for="height">Height</label>
    <input type="text" class="form-control" name="height_value" id="height">
  </div>
  <div class="form-group col-md-4">
    <label for="dimensions">Unit</label>
    <select id="unit_dimensions" name="unit_dimensions" class="form-control">
      <option value="inch" selected>inches</option>
    </select>
  </div>

</div>
<br>


<button type="save" class="btnsave">Save for later</button>
<button type="submit" class="btn btn-primary">Get Quotes</button>
</form>


</body>
</html>
