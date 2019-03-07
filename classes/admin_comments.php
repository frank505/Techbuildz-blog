<?php
require_once "../classes/config.php";
require_once "../classes/admin_pagination.php";
class admin_comments{
private $conn;
private $pagination;

public function __construct(){
    $this->conn = new config();
    $this->pagination = new pagination();
}

public function fetch_paginated_data(){
    
    $select_content = "SELECT * FROM comments_table ORDER BY ID DESC";
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
    echo"<td><center><b>". $username = $value["username"]."</b></center></td>";
    echo"<td><center><button class='btn  header-bg view-comments ' data-toggle='modal' data-target='#myModal' style='color:white;' id-view-comments='{$value["id"]}'><b class='delete' ><i class='fa fa-eye'></i></b></button></center></td>";
    echo"<td><center><button class='btn  header-bg view-post ' style='color:white;' data-toggle='modal' data-target='#myModal' id-view='{$value["post_id"]}'><b class='delete' ><i class='fa fa-eye'></i></b></button></center></td>";
    echo"<td><center><a href='replies.php?id=$id'><button class='btn  header-bg ' style='color:white;' ><b class='delete' ><i class='fa fa-reply' aria-hidden='true'></i></b></button></a></center></td>";
    echo"<td><center><button class='btn  header-bg approve-comments ' style='color:white;' id-approve='{$value["id"]}'><b class='delete' ><i class='fa fa-plus' aria-hidden='true'></i></b></button><br>
    <b class='approve-text' id-text-approve='$id'>{$value["approval"]}</b></center></td>";
    echo"<td><center><input type='checkbox' class='check_comments' id-delete='$id'/></center></td>";
    echo "</tr>";
 }

}


public function fetch_paginated_links(){
    $select_content = "SELECT * FROM comments_table";
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
     $sql_update = "UPDATE  comments_table SET seen='$one' where seen='$zero'";
     $run_query = $this->conn->query($sql_update);
 }

 public function update_replies(){
    $zero = 0;
    $one = 1;
        $sql_update_second = "UPDATE replies_table SET seen='$one' WHERE seen='$zero'";
        $run_query = $this->conn->query($sql_update_second);
 }


//end of this class
}