<?php

/**
 * Created by IntelliJ IDEA.
 * User: lidc
 * Date: 17-12-22
 * Time: 上午11:16
 */
class Front extends Web
{
    public function init()
    {
        parent::init(); // TODO: Change the autogenerated stub
        $this->checkLogin();
    }

    private function checkLogin(){
        $user_info = $this->_session->get('user_info');
        if(!isset($user_info) || !$user_info) {
            Header("Location: /member/login");
        }
    }
}