<?php
require_once('config.php');

$personalNum = isset($_POST["pnum"]) ? $_POST["pnum"] : "";
       
$endpoint = 'https://stgapi.idkollen.se/v2/8bfd8185-0f10-11ec-88ca-0a4788dac2cc/auth';

$post_json = '{
    "pno": '.$personalNum.',
    "callbackUrl": "https://www.staging.hpcsphere.com/employee/Nitish/SwedishBankID/callback.php",
    "refID": "12398698"
}';

//echo "body data  " ;echo $post_json; echo "<br>";

$ch = @curl_init();
 @curl_setopt($ch, CURLOPT_POST, true);
 @curl_setopt($ch, CURLOPT_POSTFIELDS, $post_json);
 @curl_setopt($ch, CURLOPT_URL, $endpoint);
 @curl_setopt($ch, CURLOPT_TIMEOUT, 5);
 @curl_setopt($ch, CURLOPT_HTTPHEADER, array(
     'Content-Type: application/json'
 ));
 @curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 $response =     @curl_exec($ch); // echo $response;
 $status_code =  @curl_getinfo($ch, CURLINFO_HTTP_CODE);//echo "status"; echo $status_code;echo "<br>";
 $curl_errors =  @curl_error($ch);// echo "error";// echo $curl_errors;echo "<br>";
 @curl_close($ch);
        $orderRef = json_decode( $response)->orderRef;//echo "orderref"; print_r ($orderRef);
       
        if( $status_code == 400 )
          $message = json_decode($response)->message; //echo $message;


          if ($status_code == 200 || $status_code == 201 || $status_code == 202) {
             echo  json_encode( [ "status"=>"1", "orderRef"=> $orderRef ] )  ;
          } elseif ($status_code == 400 && $message =='alreadyInProgress'  ) {
              echo json_encode(["status"=>"2"]);
          } elseif ($status_code == 405) {
             echo json_encode(["status"=> "3"]);
         } elseif ($status_code == 500) {
             echo json_encode (["status"=> "4"]);
         } else if( $status_code == 401 ) {
              echo json_encode( ["status"=> "5"]);
         }
         else if ( $status_code == 400 ) {
          echo json_encode([ "status"=> "6"]);
         }
        else {
          echo "7";
        }

        if( $status_code == 200 || $status_code == 201 || $status_code ==202 ){
      
         $conn->query("insert into partrex_api_response ( orderRef ) values ('$orderRef') ");

        }
      


?>         