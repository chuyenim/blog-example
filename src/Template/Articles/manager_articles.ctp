<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <?php 
        echo $this->Html->css('bootstrap');
        echo $this->Html->script('jquery'); 
    ?>
</head>
<body>
    <h1>Blog articles</h1>
    <table>
         <tr>
              <th>Id</th>
              <th>Title</th>
              <th>Content</th>
              <th>Status</th>
              <th>Tags</th>
              <th>Created</th>
              <th>Updated</th>
              <th></th>
              <th></th>
        </tr>

<!-- Here's where we loop through our $articles query object, printing out article info -->

        <?php foreach ($articles as $article): ?>
        <tr>
             <td><?= $article->id ?></td>
             <td><?= $article->title ?></td>
             <td><?= $article->content ?></td>
             <td><?= $article->status ?></td>
             <td><?= $article->tags ?></td>
             <td><?= $article->date_created ?></td>
             <td><?= $article->date_updated ?></td>
             <td>
                  <?= $this->Form->postLink(
                       'Delete',
                       ['action' => 'delete', $article->id],
                       ['confirm' => 'Are you sure?'])
                  ?>
             </td>
             <td>
                  <?= $this->Html->link('Edit', ['action' => 'edit', $article->id]) ?>
             </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <p><?= $this->Html->link('Add Article', ['action' => 'add']) ?></p>
</body>
</html>