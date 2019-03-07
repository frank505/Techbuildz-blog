<?php
require_once "../classes/config.php";
require_once "../classes/admin_pagination.php";
class admin_replies{
private $conn;
private $pagination;

public function __construct(){
    $this->conn = new config();
    $this->pagination = new pagination();
}

public function fetch_paginated_data($get_var){
    
    $select_content = "SELECT * FROM replies_table where comment_id='$get_var' ORDER BY ID DESC";
    $run_query = $this->conn->query($select_content);
    foreach ($run_query as $key => $results) {
      @$array_value[] = $results; 
   }
   $this->pagination->totalRecords($select_content);
   $this->pagination->setLimit(4);
   $this->pagination->multi_link_page("page","id=$get_var",$array_value);
   $data = $this->pagination->fetchResults();        
 foreach ($data as $key => $value) {
     $id = $value["id"];
    echo "<tr>";
    echo"<td><center><b>". $username = $value["username"]."</b></center></td>";
    echo"<td><center><button class='btn  header-bg view-replies ' data-toggle='modal' data-target='#myModal' style='color:white;' id-view-replies='{$value["id"]}'><b class='delete' ><i class='fa fa-eye'></i></b></button></center></td>";
    echo"<td><center><button class='btn  header-bg approve-replies ' style='color:white;' id-approve='{$value["id"]}'><b class='delete' ><i class='fa fa-plus' aria-hidden='true'></i></b></button><br>
    <b class='approve-text-replies' id-text-approve='$id'>{$value["approval"]}</b></center></td>";
    echo"<td><center><input type='checkbox' class='check_replies' id-delete='$id'/></center></td>";
    echo "</tr>";
 }

}


public function fetch_paginated_links($get_var){
    $select_content = "SELECT * FROM replies_table where comment_id='$get_var'";
    $run_query = $this->conn->query($select_content);
    foreach ($run_query as $key => $results) {
      @$array_value[] = $results; 
   }
   $this->pagination->totalRecords($select_content);
   $this->pagination->setLimit(4);
   $this->pagination->multi_link_page("page","id=$get_var",$array_value);
   $data = $this->pagination->fetchResults();
 echo"<ul class='ul-content-paginate'>";
 echo $this->pagination->firstBack();
 echo $this->pagination->where();
 echo $this->pagination->nextLast();
 echo "</ul>";

}





}