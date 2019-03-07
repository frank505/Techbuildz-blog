<?php
require_once "../classes/config.php";
require_once "../classes/admin_pagination.php";
class adverts{
    private $conn;
    private $pagination;
public function __construct(){
$this->conn = new config();
$this->pagination = new pagination();
}

public function paginate_contents(){

    $select_content = "SELECT * FROM advert ORDER BY ID DESC";
    $run_query = $this->conn->query($select_content);
    $row_count = $this->conn->rowcount($run_query);
   
        foreach ($run_query as $key => $results) {
            @$array_value[] = $results; 
         }
              
       $this->pagination->totalRecords($select_content);
       $this->pagination->setLimit(5);
       $this->pagination->page("page",$array_value);
       $data = $this->pagination->fetchResults();
       foreach ($data as $key => $value) {
        echo "<tr>";
        echo"<td><center><b>". $cat_value = $value["header"]."</b></center></td>";
        echo"<td><center><b>". $cat_value = $value["url_entered"]."</b></center></td>";
        echo"<td><center><img  src='../assets/adverts/". $cat_value = $value["file_name"]."' controls width='100' height='100'/></center></td>";
        echo"<td><center><input type='checkbox'class='check_me_advert' id='{$value["id"]}'><b class='delete' ></b></button></center></td>";
        echo "</tr>"; 
        
    }
      

    
   
}


public function pagination_links(){
    $select_content = "SELECT * FROM advert";
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



    


//end of class
}