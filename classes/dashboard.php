<?php
require_once "../classes/config.php";
class dashboard{
   private $conn;
    public function __construct(){
        $this->conn = new config();
    }
  
    public function fetch_total_post(){
        $sql_fetch = "SELECT * FROM post_content";
       $run_query = $this->conn->query($sql_fetch);
       $rowcount = $this->conn->rowcount($run_query);
       if($rowcount > 1000){
           $value = $rowcount/1000;
           return $value."K";
       }else{
          return $rowcount;
       }
    }
    
    public function fetch_total_comments(){
        $sql_fetch = "SELECT * FROM comments_table";
        $run_query = $this->conn->query($sql_fetch);
        $rowcount = $this->conn->rowcount($run_query);
        if($rowcount >1000){
            $value = $rowcount/1000;
            return $value."K";
        }else if($rowcount > 1000000){
           $second_val =  $rowcount/1000000;
            return $second_val."M";
        }else{
            return $rowcount;
        }
        
    }

    public function fetch_total_replies(){
        $sql_fetch = "SELECT * FROM replies_table";
        $run_query = $this->conn->query($sql_fetch);
        $rowcount = $this->conn->rowcount($run_query);
        if($rowcount >1000){
            $value = $rowcount/1000;
            return $value."K";
        }else if($rowcount > 1000000){
           $second_val =  $rowcount/1000000;
            return $second_val."M";
        }else{
            return $rowcount;
        }
       
    }


    public function total_videos(){
        $sql_fetch = "SELECT * FROM videos";
        $run_query = $this->conn->query($sql_fetch);
        $rowcount = $this->conn->rowcount($run_query);
        if($rowcount >1000){
            $value = $rowcount/1000;
            return $value."K";
        }else if($rowcount > 1000000){
           $second_val =  $rowcount/1000000;
            return $second_val."M";
        }else{
            return $rowcount;
        }
        
    }

  public function total_clicks(){
  $sql_total = "SELECT * FROM post_content";
  $run_query = $this->conn->query($sql_total);
  foreach ($run_query as $key => $value) {
  @$clicks += $value["clicks"];
        
  }
 $total =  $clicks * 1;
 if($total > 1000){
     echo $total."K";
 }else if($total > 1000000){
     echo $total ."M";
 }else{
     echo $total;
 }
}

public function total_videos_viewed(){
    $sql = "SELECT * FROM videos";
    $run_query = $this->conn->query($sql);
    foreach ($run_query as $key => $value) {
    @$clicks +=$value["watch_to_end"];
    }
    $total =  $clicks * 1;
    if($total > 1000){
        echo $total."K";
    }else if($total > 1000000){
        echo $total ."M";
    }else{
        echo $total;
    }
}

public function registered_user(){
$sql_select= "SELECT * FROM user_data";
$run_query = $this->conn->query($sql_select);
$rowcount = $this->conn->rowcount($run_query);
$total =  $rowcount * 1;
if($total > 1000){
    echo $total."K";
}else if($total > 1000000){
    echo $total ."M";
}else{
    echo $total;
}

}


public function fetch_last_registered_six_admin(){
$sql_select = "SELECT * FROM admin ORDER BY ID DESC LIMIT 6";
$run_query = $this->conn->query($sql_select);
foreach ($run_query as $key => $value) {
   $username = $value["username"];
   $image = $value['image'];
   echo "
   <div class='col-md-4'>
         <ul class='ul-new'>
     <li><img src='../assets/admin_image/$image' style='width:100%;height:110px;' class='round-corners'/></li>
     <li><b class='user-name'>$username</b></li>
                </ul>
             </div>";
   
  }
}

public function clicked_videos(){
    $sql = "SELECT * FROM videos";
    $run_query = $this->conn->query($sql);
    foreach ($run_query as $key => $value) {
    @$clicks +=$value["clicks"];
    }
    $total =  $clicks * 1;
    if($total > 1000){
        echo $total."K";
    }else if($total > 1000000){
        echo $total ."M";
    }else{
        echo $total;
    }
}
//end of this class
}
