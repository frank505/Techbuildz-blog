<?php
require_once "../classes/config.php";
class continent_detection{
private $conn;
public function __construct(){
$this->conn = new config();
}

public function get_continent_by_ip($ip = false) {
    $code = false;

    if (!$ip) {
        $client = @$_SERVER['HTTP_CLIENT_IP'];
        $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
        $remote = @$_SERVER['REMOTE_ADDR'];

        if (filter_var($client, FILTER_VALIDATE_IP)) {
            $ip = $client;
        } elseif (filter_var($forward, FILTER_VALIDATE_IP)) {
            $ip = $forward;
        } else {
            $ip = $remote;
        }
    }

    $response = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip={$ip}"));    

    if ($response && isset($response->geoplugin_continentCode)) {
        $code = $response->geoplugin_continentCode;
    }
    $this->return_continent($code);
}

public function return_continent($continent){
    $africa = "africa";
    $asia = "asia";
    $europe ="europe";
    $north = "north america";
    $south = "south america";
     if($continent=="AF"){
         $sql_insert = "INSERT INTO continent_detection(continent_name) VALUES('$africa')";
         $run_query = $this->conn->query($sql_insert); 
     }else if($continent=="AS"){
        $sql_insert = "INSERT INTO continent_detection(continent_name) VALUES('$asia')";
         $run_query = $this->conn->query($sql_insert);
     } else if($continent=="EU"){
        $sql_insert = "INSERT INTO continent_detection(continent_name) VALUES('$europe')";
        $run_query = $this->conn->query($sql_insert);
     } 
     else if($continent=="SA"){
        $sql_insert = "INSERT INTO continent_detection(continent_name) VALUES('$south')";
        $run_query = $this->conn->query($sql_insert);
     }    
     else if($continent=="NA"){
        $sql_insert = "INSERT INTO continent_detection(continent_name) VALUES('$north')";
        $run_query = $this->conn->query($sql_insert);
     }
     else{

     } 

}






}