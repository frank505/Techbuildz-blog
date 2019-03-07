<?php
require_once "../classes/config.php";
require_once "../classes/admin_pagination.php";
class view_content{
private $conn;
private $pagination;
public function __construct(){
    $this->conn = new config();
    $this->pagination = new pagination();
}

public function display_content(){

    $select_content = "SELECT * FROM post_content ORDER BY ID DESC";
    $run_query = $this->conn->query($select_content);
    foreach ($run_query as $key => $results) {
      @$array_value[] = $results; 
   }
        
 $this->pagination->totalRecords($select_content);
 $this->pagination->setLimit(5);
 $this->pagination->page("page",$array_value);
 $data = $this->pagination->fetchResults();
 foreach ($data as $key => $value) {
     $id = $value["id"];
    echo "<tr>";
    echo"<td><center><b>". $cat_value = substr($value["header"],0,25)."</b></center></td>";
    echo"<td><center><button class='btn  header-bg  view' data-toggle='modal' data-target='#myModal' style='color:white;' id='{$value["id"]}'><b class='delete' >
    &nbsp;<i class='fa fa-eye' aria-hidden='true'></i>&nbsp;
    </b></button></center></td>";
    echo"<td><center><a href='update-content.php?update=$id'><button class='btn  header-bg ' style='color:white;'><b class='delete'>
   &nbsp;<i class='fa fa-refresh' aria-hidden='true'></i>&nbsp;</b></button></a></center></td>";
     echo"<td><center><input type='checkbox' class='check-all' id='$id'/></center></td>";
    echo "</tr>";
 }

}

public function pagination_links(){
    
    $select_content = "SELECT * FROM post_content";
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








?>