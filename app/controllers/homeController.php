<?PHP
use coreAppNS\Controller;
//include("app/models/category.php");
class homeController extends Controller{
public $controller;
public $model;

    function __construct($function){

        $this->controller=new Controller();
        $this->model=$this->controller->model_object->create_model('home');
        $this->cat=$this->controller->model_object->create_model('admin_cat');
        $this->$function();


    }
       function home(){

        $items=array(
            'Recent'=> $this->model->getRecentAddData(),
            'Featured'=>$this->model->getAllProCatData(),
            'categories'=>$this->cat->getAllCatData()
         ); 
       
         

        $this->controller->view_object->create_view('home',$items);
       
    }
  


       
}

?>
       
