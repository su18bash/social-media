<?php
 	include "dbconnect.php";

 	$query = mysqli_query($connect,"select id from billing order by id desc limit 1");
 	if(mysqli_num_rows($query)>0)
 	{
 		$fetch = mysqli_fetch_array($query);
 		$id=$fetch[0]+1;
 		$bill_no = "bill_".$id;
 	}
 	else
 	{
 		$bill_no = "bill_1";
 	}

 	$bill_date = $_POST['bill_date'];
 	$lorry_no = $_POST['lorry_no'];
	// $lorry_name = $_POST['lorry_name'];
	$driver_name = $_POST['driver_name'];
	 $driver_no = $_POST['driver_no'];
	 $license_no = $_POST['license_no'];
	 $owner_name = $_POST['owner_name'];
	 $owner_no = $_POST['owner_no'];
	 $from_date = $_POST['from_date'];
	 $to_date = $_POST['to_date'];

	 $total_hire = $_POST['total_hire'];
	 $commission = $_POST['commission'];
	 $loading_charge = $_POST['loading_charge'];
	 $guide = $_POST['guide'];
	 $total_amount = $_POST['total_amount'];
	 $advance = $_POST['advance'];
	 $balance = $_POST['balance'];

	 $party_name = $_POST['party_name'];
	 $party_place = $_POST['party_place'];
	 $remarks = $_POST['remarks'];

	 $transport_name = $_POST['transport_name'];
	 $transport_address = $_POST['transport_address'];
	 $load_material = $_POST['load_material'];

	//$query1 = mysqli_query($connect,"INSERT INTO `billing`(`lorry_no`, `lorry_name`, `driver_name`, `driver_no`, `from_date`, `to_date`, `total_hire`, `advance`, `commission`, `loading_charge`, `guide`, `total_amount`, `created_time`) VALUES ('$lorry_no', '$lorry_name', '$driver_name', '$driver_no', '$from_date', '$to_date', '$total_hire', '$advance', '$commission', '$loading_charge', '$guide', '$total_amount',now())");

	$query1 = mysqli_query($connect,"INSERT INTO `billing`(`bill_no`, `bill_date`, `lorry_no`, `transport_name`, `transport_address`, `load_material`, `driver_name`, `driver_no`, `driver_license`, `owner_name`, `owner_no`, `from_date`, `to_date`, `total_hire`, `commission`, `loading_charge`, `guide`, `total_amount`, `advance`, `balance`, `party_name`, `party_place`, `remarks`, `created_time`) VALUES ('$bill_no','$bill_date','$lorry_no','$transport_name','$transport_address','$load_material','$driver_name','$driver_no','$license_no','$owner_name','$owner_no','$from_date','$to_date','$total_hire','$commission','$loading_charge','$guide','$total_amount','$advance','$balance','$party_name','$party_place','$remarks',now())");
	if($query1)
	{
		header('location: newbill.php?s=1');
	}

?>