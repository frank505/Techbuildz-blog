<?php
require_once "../classes/config.php";
require_once "../classes/admin_pagination.php";
class view_admin_admin_section{
protected $conn;
protected $pagination;
protected $pagination_links = "admin";
public function __construct(){
$this->conn= new config();
$this->pagination = new pagination();
}
public function paginated_results(){

}
public function display_contents(){
    $select_content = "SELECT * FROM admin";
   $run_query = $this->conn->query($select_content);
   foreach ($run_query as $key => $results) {
     @$array_value[] = $results; 
  }
       
$this->pagination->totalRecords($select_content);
$this->pagination->setLimit(5);
$this->pagination->page("page",$array_value);
$data = $this->pagination->fetchResults();
foreach ($data as $key => $value) {
    $image = $value["image"];
   echo "<tr>";
   echo"<td>". $username = $value["username"]."</td>";
   echo"<td>". $email = $value["username"]."</td>";
   echo"<td>". $udescription = $value["description"]."</td>";
   echo"<td><img src='../assets/admin_image/$image'style='width:100%;height:80px;' alt='' srcset=''></td>";
   echo "</tr>";
}

}


public function pagination_links(){
    $select_content = "SELECT * FROM admin";
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