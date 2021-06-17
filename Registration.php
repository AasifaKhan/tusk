<?php
require_once "connect.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" connect="width=device-width, initia-scale=1, shrink-to-fit=no">

	    <!-- Bootstrap CSS -->
	            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">




	<title>Registration System!</title>
	</head>
</head>
	<body>
		<?php
		if(isset($_POST['submit']))
		{
			$fname=$_POST['fname'];
			$lname=$_POST['lname'];
			$email=$_POST['username'];


			$mobile=$_POST['mobile'];
            $city=$_POST['city'];
			$state=$_POST['state'];
			$zip=$_POST['zip'];
			$date=$_POST['time'];

			$gender= $_POST['gender'];
			$address= $_POST['address'];
			$password= $_POST['password'];

}
?>
</div>
<div>

<?php
try{
	if(isset ($_POST['submit']))
	{
		$sql = "INSERT INTO register (fname,lname,email,mobile,city,state,zip,time,gender,address,password)
		VALUES ('" .$_POST["fname"]."','". $_POST["lname"]."','".$_POST["username"]."','".$_POST["mobile"]."','".$_POST["city"]."','".$_POST["state"]."','".$_POST["zip"]."','".$_POST["time"]."','".$_POST["gender"]."','".$_POST["address"]."','".$_POST["password"]."')";
		if ($conn->query($sql)) {
			echo "<script type= 'text/javascript'>alert('New Record Inserted Successfully'); </script>";
		}
		else{
			echo "<script type= 'text/javascript'>alert('Data not Successfully Inserted'); </script>";
		}

		$conn = null;
	}
}

catch (PDOException $e)
{
	echo $e->getMessage();
}

?>
    </div>
   <center>

    <h3>REGISTRATION PAGE</h3>

    	<form class="row g-3 needs-validation" method="post" action="">;
    	<div class="container">
    		<div class="col-md-4">
    			<label for="validationCustom01" class="form-label">First name</label>
    			<input type="text"  class="form-control" id="validationCustom01" name="fname" required>
    			<div class="valid-feedback">

    		</div>
    	</div>
    	<div class="col-md-4">
    			<label for="validationCustom02" class="form-label">Last name</label>
    			<input type="text"  class="form-control" id="validationCustom02" name="lname" required>
    			<div class="valid-feedback">

    			</div>
    		</div>
    		<div class="col-md-4">
    			<label for="validationCustomUsername" class="form-label">Email</label>
    			<div class="input-group has-validation">
    				<span class="input-group-text" id="inputGroupPrepend">@</span>
    			<input type="text"  class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" name="username" required>
    			<div class="valid-feedback">

    			</div>
    		</div>
    	</div>

    	<div class="col-md-4">
    			<label for="validationCustom01" class="form-label">Enter password</label>
    			<input type="password"  class="form-control" id="validationCustom01" name="password" required>
    			<div class="valid-feedback">

    			</div>
    		</div>

    		<div class="col-md-3">
    			<label for="validationCustom05" class="form-label">Mobile</label>
    			<input type="text"  class="form-control" id="validationCustom05" name="mobile" required>
    			<div class="valid-feedback">

    			</div>
    		</div><br><br>

    		<div class="col-md-4">
    			<label for="validationCustom03" class="form-label">City</label>
    			<input type="text"  class="form-control" id="validationCustom03" name="city" required>
    			<div class="valid-feedback">
    			</div>
    		</div>
    		<br><br>


    		<div class="col-md-3">
    			<label for="validationCustom04" class="form-label">state</label>
    			<select class="form-select" id="state" name="state" required>
    			<option>Maharashtra</option>
    			<option>Madhya Pradesh</option>
    			<option>Uttar Pradesh</option>
    			<option>West Bengal</option>
    			<option>XYZ</option>


    		</select>
    		<div class="invalid-feedback">

    		</div>
    	</div>


    	<div class="col-md-3">
    	  <label for="validationCustom05" class="form-label">Zip</label>
    	  <input type="text" class="form-control" id="validationCustom05" name="zip" required>
    	  <div class="invalid-feedback">

    	  </div>
    	</div><br><br>

    	<div class="col-md-4">
    		<input type="datetime-local" id="meeting-time"
    		name="time" value="2018-06-12T19:30"
    		min="2018-06-07T00" max="2030-06-14T00:00">
    	</div>
    	<br><br>
    	<div class="col-md-4">

    		<label class="form-label">Choose a gender:</label>
    		<select name="gender" id="gender">
    			<option value="male">Male</option>
    			<option value="female">Female</option>
    			<option value="other">Other</option>
    		</select>
    	</div>
    	<br><br>
    	<label for="address">Address:</label>

    	<textarea name="address" rows="6" cols="40">
    	</textarea>

    </div>
    <div class="col-12">
    	<div class="form-check">
    	<input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
    	<label class="form-check-label" for="invalidCheck">
    		Agree to terms and conditions
    	</label>
    	<div class="invalid-feedback">

    	</div>
    </div>
</div>
<br><br>

<div class="col-12">
	<button class="btn btn-primary" name="submit" type="submit">Submit form</button>
</div>
</div>
</form>
</center>
</body>
</html>
