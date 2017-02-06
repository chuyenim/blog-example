<?php 
namespace App\Controller;

class ArticlesController extends AppController
{

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Flash'); // Include the FlashComponent
    }

    public function index()
    {   
        $this->set('articles', $this->Articles->find('all'));
    }
    //Quản Lí Articles
    public function manager_articles()
    {
        $this->set('articles', $this->Articles->find('all'));
    }
    //Hàm View
    public function views($id)
    {   
        $this->viewBuilder()->layout='mylayout';
        $article = $this->Articles->get($id);
        $this->set(compact('article'));
    }
    // Thêm Articles
    public function add()
    {
        $article = $this->Articles->newEntity();
        if ($this->request->is('post')) 
        {
            $article = $this->Articles->patchEntity($article, $this->request->data);
            if ($this->Articles->save($article)) 
            {
                $this->Flash->success(__('Your article has been saved.'));
                return $this->redirect(['action' => 'manager_articles']);
            }
            $this->Flash->error(__('Unable to add your article.'));
        }
        $this->set('article', $article);
    }
    // Sửa Articles
    public function edit($id = null)
	{
        $article = $this->Articles->get($id);
        if ($this->request->is(['post', 'put'])) 
        {
            $this->Articles->patchEntity($article, $this->request->data);
            if ($this->Articles->save($article)) 
            {
                $this->Flash->success(__('Your article has been updated.'));
                return $this->redirect(['action' => 'manager_articles']);
            }
        $this->Flash->error(__('Unable to update your article.'));
        }
        $this->set('article', $article);
	}
    // Xóa Articles
	public function delete($id)
	{
        $this->request->allowMethod(['post', 'delete']);
        $article = $this->Articles->get($id);
        if ($this->Articles->delete($article)) 
        {
            $this->Flash->success(__('The article with id: {0} has been deleted.', h($id)));
            return $this->redirect(['action' => 'manager_articles']);
        }
	}
}


 ?>