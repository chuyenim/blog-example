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
	<div class="container">	
	<h1 class="text-primary">Add Article</h1>
<?php
    echo $this->Form->create($article);
    echo $this->Form->input('title');
    $options = ['1' => 'Âm Nhạc', '2' => 'Hội Họa','3'=>'Chính Trị'];
	echo $this->Form->select('category_id', $options, ['empty' => true]);
    echo $this->Form->input('content', ['rows' => '3']);
    echo $this->Form->button(__('Save Article'));
    echo $this->Form->end();
?>
</div>
</body>
</html>
