<?php
require_once "../classes/config.php";
require_once "../classes/browser_detection.php";
require_once "../classes/continent_detection.php";
class blog_index{
private $conn;
public $continent_detection;
public $browser;
public function __construct(){
$this->conn = new config();
$this->continent_detection = new continent_detection();
$this->browser = new browser();
}

public function return_browser(){
    $year = date("Y");
    $chrome="chrome";
    $safari ="safari";
    $ie ="ie";
    $opera ="operamini";
    $firefox ="firefox";
    $blackberry = "blackberry";
    $nokia = "nokia";
    $iphone = "iphone";
    $ipad = "ipad";
    if( $this->browser->getBrowser() == Browser::BROWSER_FIREFOX) {
         $sql_insert = "INSERT into browser_data(browser,year) VALUES('$firefox','$year')";
         $run_query = $this->conn->query($sql_insert);
      }else if($this->browser->getBrowser() == Browser::BROWSER_CHROME){
        $sql_insert = "INSERT into browser_data(browser,year) VALUES('$chrome','$year')";
        $run_query = $this->conn->query($sql_insert);
      }else if($this->browser->getBrowser() == Browser::BROWSER_IE){
    $sql_insert = "INSERT into browser_data(browser,year) VALUES('$ie','$year')";
       $run_query = $this->conn->query($sql_insert);
    } else if($this->browser->getBrowser() == Browser::BROWSER_OPERA_MINI){
        $sql_insert = "INSERT into browser_data(browser,year) VALUES('$opera','$year')";
           $run_query = $this->conn->query($sql_insert);
        } else if($this->browser->getBrowser() == Browser::BROWSER_BLACKBERRY){
            $sql_insert = "INSERT into browser_data(browser,year) VALUES('$blackbery','$year')";
               $run_query = $this->conn->query($sql_insert);
            } else if($this->browser->getBrowser() == Browser::BROWSER_NOKIA){
                $sql_insert = "INSERT into browser_data(browser,year) VALUES('$nokia','$year')";
                   $run_query = $this->conn->query($sql_insert);
                }
                else if($this->browser->getBrowser() == Browser::BROWSER_IPHONE){
                    $sql_insert = "INSERT into browser_data(browser,year) VALUES('$iphone','$year')";
                       $run_query = $this->conn->query($sql_insert);
                    }else if($this->browser->getBrowser() == Browser::BROWSER_IPAD){
                        $sql_insert = "INSERT into browser_data(browser,year) VALUES('$ipad','$year')";
                           $run_query = $this->conn->query($sql_insert);
                        }else{
                            
                        }
                

}


public function carousel_slide_last(){
$sql_select  = "SELECT * from post_content ORDER BY ID DESC LIMIT 1";
$run_query = $this->conn->query($sql_select);
foreach ($run_query as $key => $value) {
  $header = $value["header"];
  $image = $value["file_name"];
  $id = $value["id"];
  $category = $value["category"];
  echo "
  <div class='carousel-item active'>
  <img class='first-slide' src='assets/post_header_img/$image' style='width:100%;height:400px;' alt='First slide'>
  <div class='container'>
    <div class='carousel-caption text-left'>
      <h1>$category</h1>
      <p>$header</p>
      <p><a class='btn btn-lg btn-primary' href='blog/read-more/$category/$header' role='button'>Read More</a></p>
    </div>
  </div>
</div>
";}
}

public function select_last_two(){
    $sql_select  = "SELECT * from post_content ORDER BY ID DESC LIMIT 1,2";
    $run_query = $this->conn->query($sql_select);
    foreach ($run_query as $key => $value) {
      $header = $value["header"];
      $image = $value["file_name"];
      $id = $value["id"];
      $category = $value["category"];
      echo "
      <div class='carousel-item '>
      <img class='first-slide' src='assets/post_header_img/$image' style='width:100%;height:400px;' alt='First slide'>
      <div class='container'>
        <div class='carousel-caption text-left'>
          <h1>$category</h1>
          <p>$header</p>
          <p><a class='btn btn-lg btn-primary' href='blog/read-more/$category/$header' role='button'>Read More</a></p>
        </div>
      </div>
    </div>
    ";

}

}

public function fetch_last_four(){
    
    $sql_select = "SELECT * from post_content ORDER BY ID DESC LIMIT 4";
    $run_query = $this->conn->query($sql_select);
    foreach ($run_query as $key => $value) {
        $header = $value["header"];
        $image = $value["file_name"];
        $id = $value["id"];
        $clicks = $value["clicks"];
        $category = $value["category"];
        $time = $value["recent_time"];
        $end = time();
$diff = $end-$time;
$minute = floor($diff/(60));
$hour = floor($diff/(60*60));
$days = floor($diff/(60*60*24));
$years = floor($diff/(60*60*24*365));

        if($diff > 59 && $minute < 60 ){
            echo "
            <a href='blog/read-more/$category/$header' class='custom-text-decoration'>
            <div class='row row-line'>    
            <div class='col-md-4 col-lg-3 col-5'>
            <img src='assets/post_header_img/$image' style='width:100%;height:200px;' alt='image'>
            </div>        
            
    <div class='col-md-8 col-lg-9 col-7'>
    
    <div class='reduce-size-content'>$category | <i class='fa fa-clock-o' aria-hidden='true'></i> $minute min ago &nbsp; | 
     <i class='fa fa-eye' aria-hidden='true'></i> $clicks Views  </div>
    
       <b class='content-header'>$header</b>  
    </div>
    
    </div>
    </a>
            ";

        } else if($minute > 59 && $hour < 24){
    
            echo "
            <a href='blog/read-more/$category/$header' class='custom-text-decoration'>
            <div class='row row-line'>    
            <div class='col-md-4 col-lg-3 col-5'>
            <img src='assets/post_header_img/$image' style='width:100%;height:200px;' alt='image'>
            </div>        
            
    <div class='col-md-8 col-lg-9 col-7'>
    
    <div class='reduce-size-content'>$category | <i class='fa fa-clock-o' aria-hidden='true'></i> $hour hour ago &nbsp; | 
     
    <i class='fa fa-eye' aria-hidden='true'></i> $clicks Views </div>
    
       <b class='content-header'>$header</b>  
    </div>
    
    </div>
    </a>
            ";
             

        } else if($hour > 23  && $days < 365){
            echo "
            <a href='blog/read-more/$category/$header' class='custom-text-decoration'>
            <div class='row row-line'>    
            <div class='col-md-4 col-lg-3 col-5'>
            <img src='assets/post_header_img/$image' style='width:100%;height:200px;' alt='image'>
            </div>        
            
    <div class='col-md-8 col-lg-9 col-7'>
    
    <div class='reduce-size-content'>$category | <i class='fa fa-clock-o' aria-hidden='true'></i> $days days ago &nbsp; |  
    <i class='fa fa-eye' aria-hidden='true'></i> $clicks Views</div>
    
       <b class='content-header'>$header</b>  
    </div>
    
    </div>
    </a>
            ";
        } else if($days > 1 && $years < 100){
            echo "
            <a href=blog/read-more/$category/$header' class='custom-text-decoration'>
            <div class='row row-line'>    
            <div class='col-md-4 col-lg-3 col-5'>
            <img src='assets/post_header_img/$image' style='width:100%;height:200px;' alt='image'>
            </div>        
            
    <div class='col-md-8 col-lg-9 col-7'>
    
    <div class='reduce-size-content'>$category | <i class='fa fa-clock-o' aria-hidden='true'></i> $years days ago &nbsp; | 
    <i class='fa fa-eye' aria-hidden='true'></i> $clicks Views </div>
    
       <b class='content-header'>$header</b>  
    </div>
    
    </div>
    </a>
            ";


        }
       
        
    }
//end of this function   
}

public function show_most_discussed(){
$sql_select = "SELECT *,COUNT(*) as count FROM comments_table  GROUP BY post_id ORDER BY count DESC LIMIT 6";
$run_query = $this->conn->query($sql_select);
foreach ($run_query as $key => $value) {
  $count = $value["count"];
   $post_id = $value["post_id"];
   $sql_select_query = "SELECT * FROM post_content where id='$post_id' LIMIT 6";
   $run_this = $this->conn->query($sql_select_query);
   $count_row = $this->conn->rowcount($run_this);
   if($count_row==0){

   }else{
       foreach ($run_this as $key => $value) {
          $category = $value["category"];
          $header = $value["header"];
          $file_img = $value["file_name"];
       echo "
       <div class='content'>
       <a href='blog/read-more/$category/$header'>

       <div class='row'>
    
    <div class='col-md-3 col-lg-3 col-3'>
        <img src='assets/post_header_img/$file_img' style='width:100%;height:70px;margin-top: 5px;margin-bottom: 10px;'>
    </div>
    
    <div class='col-md-9 col-lg-9 col-9'>
        <div class='reduce-size'>$category | <i class='fa fa-comments' aria-hidden='true'></i>&nbsp;$count comment</div>
        <b>$header</b>
    </div>
    
    
    
    </div>
    
    </a>
    </div>
    ";
       

       }
   }
}

}

public function latest_side_bar_news(){
    $sql_select = "SELECT * from post_content ORDER BY ID DESC LIMIT 4";
    $run_query = $this->conn->query($sql_select);
    foreach ($run_query as $key => $value) {
        $header = $value["header"];
        $image = $value["file_name"];
        $id = $value["id"];
        $clicks = $value["clicks"];
        $category = $value["category"];
        $time = $value["recent_time"];
echo "
<a href='blog/read-more/$category/$header'>
<div class='content'>
<div class='row'>
<div class='col-md-4 col-lg-3 col-5'>
<img src='assets/post_header_img/$image' style='width:100%;height:70px;margin-top: 5px;margin-bottom: 10px;'  alt='' srcset=''>
</div>
<div class='col-md-8 col-lg-9 col-7'>
<div class='reduce-size'>$category  </div>
<b>$header</b>
</div>
</div>
</div></a>
"; 
}
//end if this function
}
public function most_viewed(){

    $sql_select = "SELECT * from post_content  ORDER BY clicks DESC LIMIT 4";
    $run_query = $this->conn->query($sql_select);
    foreach ($run_query as $key => $value) {
        $header = $value["header"];
        $image = $value["file_name"];
        $id = $value["id"];
        $clicks = $value["clicks"];
        $category = $value["category"];
        $time = $value["recent_time"];
echo "
<a href='blog/read-more/$category/$header'>
<div class='content'>
<div class='row'>
<div class='col-md-4 col-lg-3 col-5'>
<img src='assets/post_header_img/$image' style='width:100%;height:70px;margin-top: 5px;margin-bottom: 10px;'  alt='' srcset=''>
</div>
<div class='col-md-8 col-lg-9 col-7'>
<div class='reduce-size'>$category | <i class='fa fa-eye' aria-hidden='true'></i> $clicks Views </div>
<b>$header</b>
</div>
</div>
</div></a>
"; 
}   

}

public function adverts_section(){
    $sql_select = "SELECT * from advert";
    $run_query = $this->conn->query($sql_select);
    foreach ($run_query as $key => $value) {
        $header = $value["header"];
        $image = $value["file_name"];
        $id = $value["id"];
        $url_entered = $value["url_entered"];
        echo "<div class='mySlides'>
        <a href='$url_entered'><img src='assets/adverts/$image' style='width:100%;height:500px;'>
        <b style='' class='content-description'>$header</b></a>
       
      </div>";
    }


}

public function videos_display(){
$sql_select = "SELECT * FROM  videos ORDER BY ID DESC LIMIT 4";
$run_query = $this->conn->query($sql_select);
$row_count = $this->conn->rowcount($run_query);
if($row_count==0){
    echo "<h4><b>No video content is added yet</b></h4>";
}else{

    foreach ($run_query as $key => $value) {
        $header = $value["header"];
        $video = $value["video_name"];
        $id = $value["id"];
        echo "
        <div class='col-md-6'>
        <a href='#' style='color:black;text-decoration:none;'><b style='text-transform:uppercase;'class='content-header header-videos'>$header</b></a>
         <video src='assets/videos/$video' controls style='width:100%;height:200px;' ></video>    
        
        </div><br>
        
        ";

       }
}

}


public function archive(){
$sql_select =  "SELECT *,COUNT(*) as count FROM post_content  GROUP BY category ";
$run_query = $this->conn->query($sql_select);
$row_count = $this->conn->rowcount($run_query);
if($row_count==0){

}else{
    foreach ($run_query as $key => $value) {
           $count = $value["count"];
           $category= $value["category"];
      $sql= "SELECT * FROM categories where cat_value='$category'";
      $run_this = $this->conn->query($sql);
      foreach ($run_this as $key => $value) {
          $id = $value["id"];
          echo "<a href='blog/category/$category'><center class='archive-cont'><b>
          &nbsp;$category<b>($count)</b></b></center></a>
          ";
      }
           
    }
}
}



//end of this class
}





