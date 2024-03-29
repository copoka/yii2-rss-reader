<?php

use yii\helpers\Html;
use yii\widgets\ListView;
//var_dump($dataProvider);
$content = ListView::widget([
	'dataProvider' => $dataProvider,
	'itemView'     => $this->context->itemView,
	'layout'       => "{items} \n {pager}"
]);

echo Html::tag(
	$this->context->wrapTag,
	$content,
	['class' => $this->context->wrapClass]
);
