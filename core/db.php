<?PHP
        require_once("app/config/database.php");

class DB{
    public $connection;
    public  $stmt;
    public $column="";
    public $columnHead="";
    public $finalcol;
    public $tables="ii";
    public $condation="";
    public $final_query="";
    public $orderBy;
    public $count;
    public $groupBy;
    public $limit;
    public $join;
    function __construct(){
       // ECHO dataBase::$dbname;
        $dsn=dataBase::$driver.':host='.dataBase::$host.";dbname=".dataBase::$dbname;
        try {
            $this->connection = new PDO($dsn,dataBase::$username,dataBase::$pass);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          } catch (PDOException $exception) { die('gd'); }
       // $connection=new PDO();

    }
    function orderBy($ordercol,$orderway){
        if(empty($this->condation))
        $this->orderBy="order by ".$ordercol." ".$orderway." ";
       else
       $this->orderBy.=",".$ordercol." ".$orderway." ";
       return $this;
    }
    function count($col){
        $this->count="Count(".$col.") " ;
        return $this;
    }
    function groupBy($ordercol,$orderway){
        if(empty($this->condation))
        $this->groupBy="GROUP by ".$ordercol." ".$orderway." ";
       else
       $this->groupBy.=",".$ordercol." ".$orderway." ";
       return $this;
    }
    function limit($offset=0,$maxno){
        $this->limit="limit ".$offset.",".$maxno." " ;
        return $this;
    }
    function innerjoin($table,$leftside,$rightside){
        $this->join.=" INNER JOIN ".$table." ON ".$leftside." = ".$rightside." ";
        return $this;
    }
    function outerjoin($table,$leftside,$rightside){
        $this->join.=" RIGHT JOIN ".$table." ON ".$leftside." = ".$rightside." ";
        return $this;
    }
    function leftjoin($table,$leftside,$rightside){
        $this->join.=" LEFT JOIN ".$table." ON ".$leftside." = ".$rightside." ";
        return $this;
    }
    function where($col_name,$con,$value){
        if(empty($this->condation))
        $this->condation= " where ".$col_name." ".$con." ".$value." ";
       else
       $this->condation.= " and ".$col_name." ".$con." ".$value." ";
       return $this;

    }
    function orwhere($col_name,$con,$value){
        if(empty($this->condation))
        $this->condation= " where ".$col_name." ".$con." ".$value." ";
       else
       $this->condation.= " or ".$col_name." ".$con." ".$value." ";
       return $this;

    }
    function cols($cols=['*']){

       $this->columns=$cols=='*' ? $cols : implode(', ',$cols);
       $this->columnsHead= implode(', ',array_keys($cols));
        return $this;

    }
  
    function get(){
        
       $this->final_query="select ".$this->columns." from  ".$this->tables.$this->condation.$this->join.$this->count.$this->orderBy.$this->groupBy.$this->limit;
         return $this;

    }
    function table($tbl_name){
        $this->tables=implode(',',$tbl_name);
       return $this;
        //return $tables;

    }
    function settingcol(){
        $heads=explode(',',$this->columnsHead);
        $body=explode(',',$this->columns);
       
       for ($i=0; $i < count($heads) ; $i++) { 
        if(empty($this->finalcol))
           $this->finalcol=$heads[$i].' ='. $body[$i];
        else
           $this->finalcol.=" , ".$heads[$i].' ='. $body[$i];
        }
       return  $this;
    }
    function update(){
      
        $this->final_query="UPDATE ".$this->tables." SET  ".$this->finalcol.$this->condation;
        return $this;

    }
   
    function insert(){
        $this->final_query= "INSERT INTO ".$this->tables." (".$this->columnsHead.")"." VALUES (".$this->columns.") ";
        return $this;
    }
    function delete(){
         $this->final_query= "DELETE FROM ".$this->tables." ".$this->condation;
         return $this;
      
    }
    function execute(){
     
        try {
         
           $this->stmt = $this->connection->prepare($this->final_query);
        
        } catch (PDOException $exception) { die($exception->getMessage()); }
     
        return $this;
    }
    function fetch(){
        $result= $this->stmt->fetchAll(PDO::FETCH_ASSOC);
          return  $result;
    }


}

?>