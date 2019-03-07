<?php
require_once "../classes/config.php";
require_once "../classes/pagination.php";
class messages{
    private $conn;
    private $pagination;
public function __construct(){
$this->conn = new config();
$this->pagination = new pagination();
}

public function paginate_contents(){

    $select_content = "SELECT * FROM messages ORDER BY ID DESC";
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
        echo"<td><center><button data-toggle='modal' data-target='#myModal' class='header-bg btn show-message' id='{$value["id"]}'><i class='fa fa-eye'></i></button></center></td>";
        echo"<td><center><button data-toggle='modal' data-target='#myModal1'class='header-bg btn show-reply' id-reply={$value["id"]}><i class='fa fa-mail-reply' aria-hidden='true'></i></button></center></td>";
    echo"<td><center><input type='checkbox'class='check_me_message' id='{$value["id"]}'><b class='delete' ></b></button></center></td>";
        echo "</tr>"; 
        
    }
      
    
   
}


public function pagination_links(){
    $select_content = "SELECT * FROM messages";
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

    public function update_me(){
        $zero = 0;
        $one = 1;
        $sql_update = "UPDATE messages SET seen='$one' WHERE seen='$zero'";
        $run_query = $this->conn->query($sql_update);
           }
   

    


//end of class
}