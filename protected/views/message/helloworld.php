<?php
$this->breadcrumbs=array(
	'Message'=>array('message/index'),
	'Helloworld',
);?>
<h1>Hello world!</h1>

<p><?=$time?></p>
from <?=$this->author;?>
<p>
    <?php echo CHtml::link("Goodbye", array('message/goodbye'));?>
</p>