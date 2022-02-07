<?php
require_once('config.php');
$orderRef = $_POST['orderRef']; //echo $orderRef;

$request = "Select pno from partrex_api_response where orderRef = '$orderRef' and  result = 'completed' ";
//echo $request;
$result = $conn->query($request); //print_r($result);
$row = $result->fetch_assoc(); //print_r($row);
$pno = $row['pno']; //echo $pno;

if( $pno ){

  echo "success";

}
else {
 $request= "Select result from partrex_api_response where orderRef='$orderRef'";
 $result = $conn->query($request);//print_r( $result);
 $row = $result->fetch_assoc();
 if($row["result"] == "userCancel")
   echo "cancel";
 else if($row["result"] == "expiredTransaction" )
   echo "expire";
}




?>        