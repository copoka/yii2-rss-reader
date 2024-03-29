<?php

use yii\helpers\Html;

?>
<div class="well clearfix">
	<h2>
        <a href="<?php echo $model->link ?>" target="_new"><?php echo $model->title; ?></a>
    </h2>
	<p class="text-muted">
        <?php echo Yii::$app->formatter->asDatetime($model->pubDate); ?>
    </p>
	<p>
        <?php echo $model->description; ?>
    </p>
	<p>
        <?php echo Html::a("Читать далее...",
              $model->link,
              [
                'target' => '_new',
                'class' => 'btn btn-primary pull-right'
              ] );
        ?>
    </p>
</div>
