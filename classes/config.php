<?php
class config{
private $host = "localhost";
private $root = "root";
private $password = "";
private $db_name = "tech_house";
protected $connection;
private $query_db;
private $row_count;
private $fetch_array;
public static $instance;
public $cookie_name ="tech_house_cookie";
public $user_cookie = "franktechhouse";
//the database connection is established in the constructor
public function __construct(){
    $this->connection = mysqli_connect($this->host, $this->root,$this->password,$this->db_name);
      if(!$this->connection){
    throw new Exception("database connection error");
  }
}


//this performs query operations
public function query($selection){
  $this->query =  mysqli_query($this->connection, $selection);
  return $this->query;
}

//this returns the total row count in a table as demanded
public function rowcount($numrows){
$this->row_count =  mysqli_num_rows($numrows);
return $this->row_count;
}

//this fetches elements from the database in an array
//please note that this was barely used in this code as the developer preffered the foreach loop
public function fetcharray($arrayfetch){
$this->fetch_array =  mysqli_fetch_array($arrayfetch);
return $this->fetch_array;
}

//session is started
public function session($session){
  session_start();
  if(!isset($_SESSION[$session])){
    header("location:index.php");
  }else{
    return $_SESSION["$session"];
  }
}


//session is ended as well as being destroyed
public function destroysession($destroy){
  session_start();
  session_unset();
  session_destroy();
}

public function cookie($table, $param){
  $cookie = $_COOKIE[$this->cookie_name];
  if(!isset($_COOKIE[$this->cookie_name])) {
   header("location:index.php");
} else {
  $sql_select = "SELECT * FROM $table where hashed_email='$cookie'";
  $run_query = $this->query($sql_select);
  $row_count =$this->rowcount($run_query);
  if($row_count!==0){
    return  $_COOKIE[$this->cookie_name];
  }else{
    header("location:index.php");
  }

  
}
}

public function set_user_cookie(){
  if(isset($_COOKIE[$this->user_cookie])){
    return $_COOKIE[$this->user_cookie];
  }else{
    return "";
  }
   
}

public function destroycookie(){
  if (isset($_COOKIE[$this->cookie_name])) {
    unset($_COOKIE[$this->cookie_name]);
    setcookie($this->cookie_name, '', time() - 3600, '/'); // empty value and old timestamp
  }  
}

//check video mime types
function check_doc_mime( $tmpname ) {
   $finfo = finfo_open( FILEINFO_MIME_TYPE );
  $mtype = finfo_file( $finfo, $tmpname );
  finfo_close( $finfo );
  if( ($mtype == ( "video/mp4" )) || ($mtype == ( "video/avi" )) || ($mtype == ( "video/flv" ))  ) {
      return TRUE;
  }
  else {
      return FALSE;
  }
}






//end of this class
}
