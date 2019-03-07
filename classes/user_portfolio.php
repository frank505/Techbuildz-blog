<?php
require_once "./classes/config.php";
require_once "./classes/pagination.php";
class user_portfolio{
private $conn;
private $pagination;

public function __construct(){
    $this->conn = new config();
    $this->pagination = new pagination();
}



public function paginate_user_view(){
    $select_content = "SELECT * FROM portfolio ORDER BY ID DESC";
    $run_query = $this->conn->query($select_content);
    $row_count = $this->conn->rowcount($run_query);
   
        foreach ($run_query as $key => $results) {
            @$array_value[] = $results; 
         }
              
       $this->pagination->totalRecords($select_content);
       $this->pagination->setLimit(5);
       $this->pagination->page("page",$array_value);
       $data = $this->pagination->fetchResults();
           foreach ($run_query as $key => $value) {
               $header = $value["header"];
               $url = $value["url"];
               $file_name = $value["file_name"];
               $id = $value["id"];
             echo "<div class='col-md-4'>
                    <center><b>$header</b></center><br>
             <a href='$url'>
              <img src='./assets/portfolio/$file_name' alt='' sizes='' srcset='' class='img-portfolio' style=''/>
             </a>
             </div>";
            
            }    
      
  }


  public function pagination_links(){
    $select_content = "SELECT * FROM portfolio";
    $run_query = $this->conn->query($select_content);
    
        foreach ($run_query as $key => $results) {
            @$array_value[] = $results; 
         }
              
       $this->pagination->totalRecords($select_content);
       $this->pagination->setLimit(5);
       $this->pagination->page("page",$array_value);
       echo"<ul class='ul-content-paginate'>";
       echo $this->pagination->firstBack();
       echo $this->pagination->where();
       echo $this->pagination->nextLast();
       echo "</ul>";
    }





//end of this class
}