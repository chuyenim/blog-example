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
    <h1 class="text-primary">Blog articles</h1>
    <div class="container">
<table>

<!-- Here's where we loop through our $articles query object, printing out article info -->

    <?php foreach ($articles as $article): ?>

    <tr>
        <td>
        <p class="text-justify">
        <?= $this->Html->link($article->title, ['action' => 'views',$article->id]) ?>
        </p>
        </td> 
    </tr>
    <tr>
        <td><?= $article->content ?></td>
    </tr>
    <tr>
        <td><bold><i>Ngày Tạo : <?= $article->date_created ?></i></bold></td>
    </tr>
    <?php endforeach; ?>

</table>
<p><?= $this->Html->link('Add Article', ['action' => 'add']) ?></p>
</div>
</body>
</html>