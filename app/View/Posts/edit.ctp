<!-- File: /app/View/Posts/edit.ctp -->

<h1>Edit Post</h1>
<?php
echo $form->create('Post',array('action'=>'edit'));
echo $form->input('title');
echo $form->input('body');
echo $form->input('id', array('type' => 'hidden'));
echo $form->end('Edit Post');

//echo $form->end('Edit Post');



?>