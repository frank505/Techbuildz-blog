<?php
if(file_exists("../classes/config.php")){
    require_once "../classes/config.php";    
}else{
    require_once "./classes/config.php";
}
class Pagination{
    private $conn;
    private $total_records;
    private $limit;
    private $total_pages;
    private $firstBack;
    private $nextLast;
    private $where;
    public $data;
    public function __construct() {
        $this->conn = new config();
    }
   
    //returns the total records of data
    public function totalRecords($query){
         $query_data = $this->conn->query($query);
        $this->total_records = $this->conn->rowcount($query_data);
        if ($this->total_records==0) {
            
            return $this->total_records;
        }else{
            return $this->total_records;
              
        }
    }

    //this sets the limit of the content per page we want
    public function setLimit($limit){
        $this->limit = $limit;
        if ($this->total_records!=0) {
            $this->total_pages = ceil($this->total_records / $this->limit);
        }else{

        }
    }

    
     //this is responsible for showing the pagination links
       public function page($pagination_link, $values){
        $total_values = count($values);
        $pageno =  (int)(isset($_GET[$pagination_link])) ? $_GET[$pagination_link] : $pageno = 1;
        $counts = ceil($total_values/$this->limit);
        $param1 = ($pageno - 1) * $this->limit;
        $this->data = array_slice($values, $param1,$this->limit);      
 
        
        if ($pageno > $this->total_pages) {
            $pageno = $this->total_pages;
        } elseif ($pageno < 1) {
            $pageno = 1;
        }
        if ($pageno > 1) {
            $prevpage = $pageno -1;
            $this->firstBack = "<div class='first-back'><a href='$_SERVER[PHP_SELF]?$pagination_link=1'>
            <i class='fa fa-arrow-circle-o-left' aria-hidden='true'></i>&nbsp;First
            </a> 
            <a href='$_SERVER[PHP_SELF]?$pagination_link=$prevpage'>
            <i class='fa fa-arrow-circle-o-left' aria-hidden='true'></i>&nbsp;
            prev
            </a></div>";
        }

        $this->where =  "<div class='page-count'>(Page $pageno of $this->total_pages)</div>";

        if ($pageno < $this->total_pages) {
            $nextpage = $pageno + 1;
            $this->nextLast =  "<div class='next-last'>
            <a href='$_SERVER[PHP_SELF]?$pagination_link=$nextpage'>Next&nbsp;
            <i class='fa fa-arrow-circle-o-right' aria-hidden='true'></i></a> 
            <a href='$_SERVER[PHP_SELF]?$pagination_link=$this->total_pages'>Last&nbsp;
            <i class='fa fa-arrow-circle-o-right' aria-hidden='true'></i>
            </a></div>";
        }

        return $pageno;
    }


    //this fetches the result of the paginated content
    public function fetchResults(){
               $resultsValues  = $this->data;
        return $resultsValues;
      }


    public function multi_link_page($pagination_link, $multi_link, $values){
        $total_values = count($values);
        $pageno =  (int)(isset($_GET[$pagination_link])) ? $_GET[$pagination_link] : $pageno = 1;
        $counts = ceil($total_values/$this->limit);
        $param1 = ($pageno - 1) * $this->limit;
        $this->data = array_slice($values, $param1,$this->limit);      
        if ($pageno > $this->total_pages) {
            $pageno = $this->total_pages;
        } elseif ($pageno < 1) {
            $pageno = 1;
        }
        if ($pageno > 1) {
            $prevpage = $pageno -1;
            $this->firstBack = "<div class='first-back'><a href='$_SERVER[PHP_SELF]?$pagination_link=1&$multi_link'>First</a> 
            <a href='$_SERVER[PHP_SELF]?$pagination_link=$prevpage&$multi_link'>prev</a></div>";
        }

        $this->where =  "<div class='page-count'>(Page $pageno of $this->total_pages)</div>";

        if ($pageno < $this->total_pages) {
            $nextpage = $pageno + 1;
            $this->nextLast =  "<div class='next-last'><a href='$_SERVER[PHP_SELF]?$pagination_link=$nextpage&$multi_link'>Next</a> 
            <a href='$_SERVER[PHP_SELF]?$pagination_link=$this->total_pages&$multi_link'>Last</a></div>";
        }

        return $pageno;
    }
  

    public function firstBack(){
        return $this->firstBack;
    }

    public function nextLast(){
        return $this->nextLast;
    }

   
    public function where() {
        return $this->where;
    }

    //end of this class
}



