<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
	
?>

<h1><?php echo CHtml::encode(Yii::app()->name); ?></h1>


<p><?php echo $this->error; ?></p>
<form>
<input type="text" value="" id="input" />
<input type="button" value="Укоротить" id="button" />
<input type="text" value="" readonly="readonly" id="result" />
</form>