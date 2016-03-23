<?php 
namespace Train\Controllers;

use Phalcon\Mvc\Controller;
class AdminController extends Controller
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