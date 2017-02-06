<?php 
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class ArticlesTable extends Table
{
     public function initialize(array $config) 
     {
          $this->addBehavior('Timestamp');
     }

     public function validationDefault(Validator $validator) 
     {
          $validator
              ->notEmpty('title')
              ->requirePresence('title')
              ->notEmpty('category_id')
              ->requirePresence('category_id')
              ->notEmpty('content')
              ->requirePresence('content');
          return $validator;
     }
}
 ?>