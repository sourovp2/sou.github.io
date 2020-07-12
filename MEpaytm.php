<?php
	header("Pragma: no-cache");
	header("Cache-Control: no-cache");
	header("Expires: 0");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Merchant Check Out Page</title>
<style type="text/css">
    .row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 90%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (and change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>
<body>
	<div class="row">
	    <div class="col-75">
	        <div class="container">
	            <form method="post" action="MEcheck.php">
	                <div class="row">
	                    <div class="col-50">
	                        <h3>Merchant Check Out Page</h3>
	                        <input type="hidden" name="host" value="<?php echo $_GET['host'];?>">
	                        <input type="hidden" name="key" value="<?php echo $_GET['key'];?>">
	                        <input type="hidden" name="mid" value="<?php echo $_GET['mid'];?>">
	                        <label>Order Id*</label>
	                        <input type="text" value="<?php echo  "ORDS" . rand(10000,99999999)?>" disabled>
	                        <input type="hidden" id="ORDER_ID" tabindex="1" maxlength="20" size="20" name="ORDER_ID" autocomplete="off" value="<?php echo  "ORDS" . rand(10000,99999999)?>">
	                        <label>Customer Id*</label>
	                        <input type="text" value="<?php echo  "CUST" . rand(100,9999)?>" disabled>
	                        <input type="hidden" id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="<?php echo  "CUST" . rand(100,9999)?>">
	                        <label>Industry Type*</label>
	                        <input type="text" value="Retail" disabled>
	                        <input type="hidden" id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail">
	                        <label>Channel*</label>
	                        <input type="text" value="WEB" disabled>
	                        <input type="hidden" id="CHANNEL_ID" tabindex="4" maxlength="12" size="12" name="CHANNEL_ID" autocomplete="off" value="WEB">
	                        <label>Amount*</label>
	                        <input type="text" value="<?php echo $_GET['amt'];?>" disabled>
	                        <input title="TXN_AMOUNT" tabindex="10" type="hidden" name="TXN_AMOUNT" value="<?php echo $_GET['amt'];?>">
	                        <input value="CheckOut" type="submit" class="btn" onclick="">
	                   </div>
	               </div>
	           </form>
	       </div>
	   </div>
	</div>
</body>
</html>