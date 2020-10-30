<?PHP
use coreAppNS\Model;

class productModel extends Model {

    public  $db;

    function __construct(){
        $this->db=new DB();
   }
   function  getQuery(){
     
    $tbls=array("product");
    return  $this->db
    ->cols()
    ->table($tbls)
    ->get()
    ->execute()->fetch();      
}
function  getAllCatData(){
    $cols=array();
    $table=array("categories");
   $result=  $this->db->cols()
   ->table($table)
   ->get()
   ->execute()
   ->fetch();
return $result;
}
function  getcat(){
     
    $tbls=array("categories");
    return  $this->db
    ->cols()
    ->table($tbls)
    ->where("is_active","=",1)
    ->where("parent","=",0)
    ->get() 
    ->execute()->fetch();      
}

function  getcatchiled($id){
   
    $tbls=array("categories");
    return  $this->db
    ->cols()
    ->table($tbls)
    ->where("is_active","=",1)
    ->where("parent","=","'.$id.'")
    ->get() 
    ->execute()->fetch();  
    
}
    function  add($data){
     
        $tbls=array("product");
        $result=  $this->db->cols($data)->table($tbls)->insert()->execute();

            
    }
    function delete(){
        $id=$_REQUEST['empid'];
        $tbls=array("product");
        $result=  $this->db->table($tbls)->where("pro_id","=","'".$id."'")->delete()-> execute();
    }

    function  view_product(){
        $id=$_GET['pro_id'];

        $tbls=array("categories","product","tag_details","tags");
        return  $this->db
        ->cols()
        ->table($tbls) 
        ->where("product.pro_id","=","'".$id."'")
        ->where("product.cat_id","=","categories.cat_id")
        ->where("product.pro_id","=","tag_details.pro_id")
        ->where("tag_details.tag_id","=","tags.tag_id")
        ->get()
        ->execute()->fetch();  
        /**/
        /*->innerjoin("product","categories.cat_id","product.cat_id")
        ->innerjoin("tag_details","product.pro_id","tag_details.pro_id")
        ->innerjoin("tags","tag_details.tag_id","tags.tag_id")*/
    }
    function  updateProduct(){
        $id=$_GET['pro_id'];
        $tbls=array("product");
        return  $this->db
        ->cols()
        ->table($tbls)
        ->where("pro_id","=","'".$id."'")
		->get()
		->execute()->fetch();      
    }
    function update($data){
        $tbls=array('product');
        $id=$_POST['pro_id'];
        return $this->db->cols($data)->table($tbls)->where("pro_id","=","'".$id."'")->update()->execute();
    }

function view_more(){
    $tbls=array('product');
    $id=$_REQUEST['pro_id'];
    return $this->db->clos()->table($tbls)->where("pro_id","=","'".$id."'")->get()-> execute();
    print_r($result);
}
}

?>