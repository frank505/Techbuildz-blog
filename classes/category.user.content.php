<?php
require_once "../classes/config.php";
require_once "../classes/pagination.php";

class category{
private $conn;
private $pagination;
public function __construct(){
    $this->conn = new config();
    $this->pagination = new pagination();
}

public function fetch_category_paginated_data($get_var){
    $sql_statement =  "SELECT * FROM post_content where category='$get_var' ORDER BY ID DESC";
    $run_query = $this->conn->query($sql_statement);
    foreach ($run_query as $key => $results) {
        @$array_value[] = $results; 
     }
          
   $this->pagination->totalRecords($sql_statement);
   $this->pagination->setLimit(4);
   $this->pagination->multi_link_page("contents","category=$get_var",$array_value);
   $data = $this->pagination->fetchResults();
    
   foreach ($data as $key => $value) {
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
            
    <div class=' col-md-8 col-lg-9 col-7'>
    
    <div class='reduce-size-content'>$category | <i class='fa fa-clock-o' aria-hidden='true'></i> $days days ago &nbsp; | 
    <i class='fa fa-eye' aria-hidden='true'></i> $clicks Views</div>
    
       <b class='content-header'>$header</b>  
    </div>
    
    </div>
    </a>
            ";
        } else if($days > 1 && $years < 100){
            echo "
            <a href='blog/read-more/$category/$header' class='custom-text-decoration'>
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


        }else{
            echo "
            <a href='blog/read-more/$category/$header' class='custom-text-decoration'>
            <div class='row row-line'>    
            <div class='col-md-4 col-lg-3 col-5'>
            <img src='assets/post_header_img/$image' style='width:100%;height:200px;' alt='image'>
            </div>        
            
    <div class='col-md-8 col-lg-9 col-7'>
    
    <div class='reduce-size-content'>$category | 
    <i class='fa fa-eye' aria-hidden='true'></i> $clicks Views </div>
    
       <b class='content-header'>$header</b>  
    </div>
    
    </div>
    </a>
            ";
        }


}

}

public function fetch_category_name($get_var){
    
    $select_content = "SELECT * FROM post_content where category='$get_var'";
    $run_query = $this->conn->query($select_content);
    $rowcount = $this->conn->rowcount($run_query);
    if($rowcount==0){
        return "No Contents Yet";
    }else{
        foreach ($run_query as $key => $value) {
            return $value["category"];
         }

    }
    

}


public function fetch_category_paginated_links($get_var){
 $select_content = "SELECT * FROM post_content where category='$get_var'";
    $run_query = $this->conn->query($select_content);
    $row_count = $this->conn->rowcount($run_query);
    foreach ($run_query as $key => $results) {
      @$array_value[] = $results; 
   }
        
 $this->pagination->totalRecords($select_content);
 $this->pagination->setLimit(4);
 $this->pagination->multi_link_page("contents","$get_var",$array_value);
 echo"<ul class='ul-content-paginate'>";
 echo $this->pagination->firstBack();
 if($row_count==0){
     echo "";
 }else{
    echo $this->pagination->where();
 }
 
 echo $this->pagination->nextLast();
 echo "</ul>";


}

//end of class here
}