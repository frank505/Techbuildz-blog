<?php
require_once "../classes/config.php";
require_once "../classes/pagination.php";
class user_video{
private $conn;
private $pagination;

public function __construct(){
    $this->conn = new config();
    $this->pagination = new pagination();
}

public function fetch_paginated_data(){

    $select_content = "SELECT * FROM videos ORDER BY ID DESC";
    $run_query = $this->conn->query($select_content);
    foreach ($run_query as $key => $results) {
      @$array_value[] = $results; 
   }
        
 $this->pagination->totalRecords($select_content);
 $this->pagination->setLimit(6);
 $this->pagination->page("page",$array_value);
 $data = $this->pagination->fetchResults();
 foreach ($data as $key => $value) {
    $header = $value["header"];
    $video = $value["video_name"];
    $id = $value["id"];
    echo "
    <div class='col-md-6'>
    <a href='assets/videos/$image' style='color:black;text-decoration:none;'><b style='text-transform:uppercase;font-size:18px;'class='content-header header-videos'>
    $header &nbsp; <b class='archive-restyle'>{$value["archive_format"]}</b></b></a>
     <video src='assets/videos/$video' id-data='$id'controls style='width:100%;height:200px;' ></video>    
    
    </div><br>
    
    ";

}

}


public function fetch_paginated_links(){
    $select_content = "SELECT * FROM videos";
    $run_query = $this->conn->query($select_content);
    foreach ($run_query as $key => $results) {
      @$array_value[] = $results; 
   }
        
 $this->pagination->totalRecords($select_content);
 $this->pagination->setLimit(6);
 $this->pagination->page("page",$array_value);
 echo"<ul class='ul-content-paginate'>";
 echo $this->pagination->firstBack();
 echo $this->pagination->where();
 echo $this->pagination->nextLast();
 echo "</ul>";

}

public function most_viewed_videos(){
    $sql_select = "SELECT * from videos ORDER BY watch_to_end DESC LIMIT 4";
    $run_query = $this->conn->query($sql_select);
    foreach ($run_query as $key => $value) {
        $header = $value["header"];
        $image = $value["video_name"];
        $id = $value["id"];
        $clicks = $value["watch_to_end"];
        $time = $value["recent_time"];
echo "
<a href='assets/videos/$image'>
<div class='content'>
<div class='row'>
<div class='col-md-3'>
<video controls src='assets/videos/$image' id-data='$id' style='width:100%;height:70px;margin-top: 5px;margin-bottom: 10px;'  alt='' srcset=''>
</video>
</div>
<div class='col-md-9'>
<div class='reduce-size'>&nbsp;$clicks&nbsp;<i class='fa fa-eye'></i>&nbsp;</div>
<b>$header</b>
</div>
</div>
</div></a>
"; 
}


}


public function latest_videos(){

$sql_select = "SELECT * from videos ORDER BY ID DESC LIMIT 4";
$run_query = $this->conn->query($sql_select);
foreach ($run_query as $key => $value) {
        $header = $value["header"];
        $image = $value["video_name"];
        $id = $value["id"];
        $clicks = $value["watch_to_end"];
        $time = $value["recent_time"];
echo "
<a href='assets/videos/$image'>
<div class='content'>
<div class='row'>
<div class='col-md-3'>
<video controls src='assets/videos/$image' id-data='$id' style='width:100%;height:70px;margin-top: 5px;margin-bottom: 10px;'  alt='' srcset=''>
</video>
</div>
<div class='col-md-9'>
<b>$header</b>
</div>
</div>
</div></a>
"; 
}

}

//end of this class
}