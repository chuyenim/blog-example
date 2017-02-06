<?php 
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;
class UserTable extends Table {
   var $name = "User";
   
   public function checkLogin($username,$password){
     $sql = "Select username,password from user where username='$username' AND password ='$password'";
     $this->query($sql);
     if($this->getNumRows()==0){
       return false;
     }else{
       return true;
     }
   }
}
?>