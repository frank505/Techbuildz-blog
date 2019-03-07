<?php
define("SERVER_API_KEY","AIzaSyAGz8O-QE5_SGJaVKZL1vq9AgOGU6hqlH4");
require_once "../classes/config.php";
$conn = new config();
$zero = 0;
$one = 1;
$media_team = "Techbuildz";
$sql_selects="SELECT * FROM push_table";
      $run_query = $conn->query($sql_selects);
      foreach ($run_query as $key => $values) {
          $registrationids[] = $values["token"];
      }
      $sql_me = "SELECT * FROM post_content where push_sent='$zero'";
      $run_me = $conn->query($sql_me);
      foreach ($run_me as $key => $value) {
        $surelinks = $value["header"];
        $newfilename = $value["file_name"];
        $header = [
            'Authorization: Key='.SERVER_API_KEY,
            'Content-Type:Application/json',
        ];
     
        $message = [
            "title"=> $media_team,
            "body"=> "hello",
            "icon" => "assets/post_header_img/$newfilename",
            "click_action" => "https://localhost/surelinks/blog/index.php",
            "image" => "assets/post_header_img/$newfilename",
        ];
        $payload = [
            "registration_ids" =>$registrationids,
            "data" => $message
        ];
   
     $curl = curl_init();
     curl_setopt_array($curl, array(
        CURLOPT_URL => "https://fcm.googleapis.com/fcm/send",
        CURLOPT_RETURNTRANSFER => TRUE,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS =>  json_encode($payload),
        CURLOPT_HTTPHEADER => $header,
        CURLOPT_FOLLOWLOCATION => 1,
     ));
    $response = curl_exec($curl);
    $err  = curl_error($curl);
    curl_close($curl);
     if($err){
         echo"cURL Error #:".$err;
     } else{
         $update_query = "UPDATE post_content SET push_sent='$one' where push_sent='$zero'";
         $run_me = $conn->query($update_query);
         echo $response;
     }


      }
    

  



















?>