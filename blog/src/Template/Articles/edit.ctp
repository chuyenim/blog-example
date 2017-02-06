<!-- File: src/Template/Articles/edit.ctp -->

<h1>Edit Article</h1>
<?php
    echo $this->Form->create($article);
    echo $this->Form->input('title');
    $options = ['1' => 'Âm Nhạc', '2' => 'Hội Họa','3'=>'Chính Trị'];
	echo $this->Form->select('category_id', $options, ['empty' => true]);
    echo $this->Form->input('content', ['rows' => '3']);
    echo $this->Form->button(__('Save Article'));
    echo $this->Form->end();
?>