<?php
namespace App\Controller;
class UserController extends AppController
{
    var $name = "Users";
    var $helpers = array("Html");
    var $component = array("Session");
    public function initialize()
    {
      parent::initialize();
      $this->loadComponent('Flash'); // Include the FlashComponent
    }
    // Đăng Nhập
    public function login()
    {
      $error = "";
      if($this->request->is('post'))
      {
        $user = $this->Auth->identify();
        if($user)
        {
          $this->Auth->setUser($user);
          return $this->redirect($this->Auth->redirectUrl());
        }
        else 
        {
          $error = 'Tên đăng nhập và mật khẩu không đúng';
        }
      }
      $this->set('error', $error);
    }
    // Đăng Xuất  
    public function logout()
    {
      $this->Session->delete('session'); //xóa session
      $this->redirect('login'); //chuyển trang login
    }
}