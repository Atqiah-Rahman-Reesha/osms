<?php
define('TITLE', 'Submit Request');
define('PAGE', 'submitrequest');
include('includes/header.php');
include('../dbConnection.php');
session_start();
if ($_SESSION['is_login']) {
	$rEmail = $_SESSION['rEmail'];
} else {
	echo "<script> location.href = 'requesterlogin.php'</script>";
}

if(isset($_REQUEST['submitrequest'])){
	// checking for emty filess
	if(($_REQUEST['requestinfo'] == "") || ($_REQUEST['requestdesc'] == "") || ($_REQUEST['requestername'] == "") || ($_REQUEST['requesteradd1'] == "") || ($_REQUEST['requesteradd2'] == "") || ($_REQUEST['requestercity'] == "") || ($_REQUEST['requesterstate'] == "") || ($_REQUEST['requesterpostcode'] == "") || ($_REQUEST['requesteremail'] == "") || ($_REQUEST['requestermobile'] == "") || ($_REQUEST['requesterdate'] == "")){
		$msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill All Fields</div>';
	} else {
		$rinfo = $_REQUEST['requestinfo'];
		$rdesc = $_REQUEST['requestdesc'];
		$rname = $_REQUEST['requestername'];
		$radd1 = $_REQUEST['requesteradd1'];
		$radd2 = $_REQUEST['requesteradd2'];
		$rcity = $_REQUEST['requestercity'];
		$rstate = $_REQUEST['requesterstate'];
		$rpostcode = $_REQUEST['requesterpostcode'];
		$remail = $_REQUEST['requesteremail'];
		$rmobile = $_REQUEST['requestermobile'];
		$rdate = $_REQUEST['requesterdate'];
		$sql = "INSERT INTO submitrequest_tb(request_info, request_desc, requester_name, requester_add1, requester_add2, requester_city, requester_state, requester_postcode, requester_email, requester_mobile, request_date) VALUES('$rinfo', '$rdesc', '$rname', '$radd1', '$radd2', '$rcity', '$rstate', '$rpostcode', '$remail', '$rmobile', '$rdate')";
		if($conn->query($sql) == TRUE){
			$genid = mysqli_insert_id($conn);
			$msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2">Request Submitted Successfully</div>';
			$_SESSION['myid'] = $genid;
		    echo "<script> location.href = 'submitreqsuccess.php'</script>";
		} else {
			$msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2">Unable to submit your request</div>';
		}

	}
}

?>

<div class="col-sm-9 ol-md-10 mt-5"> <!-- Start service Request form 2nd column -->
	<form class="mx-5" action="" method="POST">
		<div class="form-group">
			<label for="inputrequestinfo">Request Info</label>
			<input type="text" class="form-control" id="inputrequestinfo" placeholder="Request Info" name="requestinfo">
			
		</div>
		<div class="form-group">
			<label for="inputrequestdescription">Description</label>
			<input type="text" class="form-control" id="inputrequestdescription" placeholder="Write Description" name="requestdesc">
		</div>
		<div class="form-group">
			<label for="inputname">Name</label>
			<input type="text" class="form-control" id="inputname" placeholder="Reesha" name="requestername">
		</div>
		<div class="form-row">
		<div class="form-group col-md-6">
			<label for="inputAddress">Address Line 1</label>
			<input type="text" class="form-control" id="inputAddress" placeholder="House No. 123" name="requesteradd1">
		</div>
		<div class="form-group col-md-6">
			<label for="inputAddress2">Address Line 2</label>
			<input type="text" class="form-control" id="inputAddress2" placeholder="Mohammadpur" name="requesteradd2">
		</div>
	</div>
	<div class="form-row">
		<div class="form-group col-md-6">
			<label for="inputcity">City</label>
			<input type="text" class="form-control" id="inputcity" name="requestercity">
		</div>
		<div class="form-group col-md-4">
			<label for="inputstate">State</label>
			<input type="text" class="form-control" id="inputstate" name="requesterstate">
		</div>
		<div class="form-group col-md-2">
			<label for="inputpostcode">Post Code</label>
			<input type="text" class="form-control" id="inputpostcode" name="requesterpostcode" onkeypress="isInputNumber(event)">
		</div>
	</div>
	<div class="form-row">
	<div class="form-group col-md-6">
			<label for="inputEmail">Email</label>
			<input type="text" class="form-control" id="inputEmail" name="requesteremail">
		</div>
	    <div class="form-group col-md-2">
			<label for="inputmobile">Mobile</label>
			<input type="text" class="form-control" id="inputmobile" name="requestermobile" onkeypress="isInputNumber(event)">
		</div>
		<div class="form-group col-md-2">
			<label for="inputdate">Date</label>
			<input type="text" class="form-control" id="inputdate" name="requesterdate">
		</div>
	</div>
	<button type="submit" class="btn btn-danger" name="submitrequest">Submit</button>
	<button type="reset" class="btn btn-secondary">Reset</button>
	</form>
	<?php if(isset($msg)){echo $msg;} ?>
	
</div> <!-- End service Request form 2nd column -->

<!-- Only number for input fields -->
<script>
	function isInputNumber(evt){
		var ch = String.formCharCode(evt.which);
		if(!(/[0-9]/.test(ch))){
			evt.preventDefault();
		}
	}
</script>



<?php
include('includes/footer.php');
?>


