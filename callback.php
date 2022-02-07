<?php
 require_once('config.php');
 $json = file_get_contents('php://input');
    $data = json_decode($json);
    $result = $data->result;
    $orderRef = $data->orderRef;
    $pno = $data->pno;
    $name = $data->name;
    $checksum = $data->checksum;
    $certstartdate = $data->certStartDate;
    $refID = $data->refID;


 $request = "update partrex_api_response set result='$result', pno = '$pno', name = '$name', checksum='$checksum', certStartDate='$certStartDate', refID = '$refID'  where orderRef = '$orderRef' ";

 $conn->query( $request);

?>