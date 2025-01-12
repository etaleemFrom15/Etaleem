<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script> 

<script type="text/javascript" src="<?php echo base_url(); ?>js/custom.js"></script>
</head>
<body>


<?php

//To Show All Notifications
if(isset($notifications)){

	foreach ($notifications as $notify) {
		$notify_id=$notify['id'];
		$notify_text=$notify['notification'];
		echo anchor("Notifications/notify/".$notify_id,$notify_text)."<br>";
	}
}

//To Show Specific Notification According to Id
if(isset($notification)){

	echo $notification['notification']."<br>";

	//If Notification From Student To Teacher Of Course Request i.e 0 Represent Course Request
	if($notification['type']==0){ ?>

		<form>
			<input type="number" id="bid">
			<input type="hidden" value="<?php echo $notification['req_id']; ?>" id="req_id">
			<input type="hidden" value="<?php echo $_SESSION['user_email']; ?>" id="u_email">
			<input type="hidden" value="<?php echo base_url(); ?>" id="base_url">
			<input type="button" onclick="sendBid()" value="Response to Request">
		</form>
		<div class="alert alert-success" id="bidalert" style="display:none">
		  Bid Has Been Send Succesfully
		</div>
		

	<?php } elseif ($notification['type']==1) { ?>
		<form action="<?php echo base_url(); ?>Payment_Controller/create_invoice" method="post">
			<input type="hidden" value="<?php echo $notification['req_id']; ?>" name="req_id">
			<input type="hidden" value="<?php echo $notification['by']; ?>" name="by">
			<input type="submit" value="Accept Bid" name="submit">
		</form>
	<?php
	}
}

?>

</body>
</html>