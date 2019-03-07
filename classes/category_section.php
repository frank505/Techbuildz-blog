<?php
require_once "../classes/config.php";
require_once"../classes/admin_pagination.php";
class category_section{
protected $conn;
private $pagination;
public function __construct(){
    $this->conn  = new config();
    $this->pagination = new pagination();
}

public function fetch_paginated_categories(){
    $select_content = "SELECT * FROM categories ORDER BY ID DESC";
    $run_query = $this->conn->query($select_content);
    foreach ($run_query as $key => $results) {
      @$array_value[] = $results; 
   }
        
 $this->pagination->totalRecords($select_content);
 $this->pagination->setLimit(5);
 $this->pagination->page("page",$array_value);
 $data = $this->pagination->fetchResults();
 foreach ($data as $key => $value) {
    echo "<tr>";
    echo"<td><center><b>". $cat_value = $value["cat_value"]."</b></center></td>";
    echo"<td><center><button class='btn  header-bg  btn-delete' style='color:white;' id='{$value["id"]}'><b class='delete' >delete</b></button></center></td>";
    echo "</tr>";
 }

}


public function paginate_link(){

    $select_content = "SELECT * FROM categories";
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