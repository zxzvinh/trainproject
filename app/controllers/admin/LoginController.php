<?php
namespace Train\Controllers\Admin;

class LoginController extends ControllerBase
{

    public function indexAction()
    {
    	 $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $user = Users::findFirstByUsername($username);
        if ($user) {
            if ($this->security->checkToken() && $this->security->checkHash($password, $user->password)) {
                $this->session->set('login', array(
                    'id' => $user->id,
                    'username' => $user->username
                    ));
                return $this->dispatcher->forward(array(
                    "controller" => "admin",
                    "action" => "success"
                    ));
            } else {
                return $this->dispatcher->forward(array(
                    "controller" => "admin",
                    "action" => "failed"
                    ));
            }
        } else {
            return $this->dispatcher->forward(array(
                "controller" => "admin",
                "action" => "notfound"
                ));
        }
    }

}

