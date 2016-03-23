<?php 
namespace Train\Controllers\Admin;

use Phalcon\Mvc\Controller;
class IndexController extends Controller
{
	public function indexAction(){
		if ($this->session->get('login')){

		}else{
	 	return $this->dispatcher->forward(array(
            	"controller" => "Login",
	            "action" => "index"
        	));
		}
	}


}

?>