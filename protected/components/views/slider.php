<div id="slider">
    <?php foreach($this->slider as $slider):?>
    <a href="index.php">
        <img src="<?php echo Yii::app()->request->baseUrl . $slider['path'] ?>" />
    </a>
    <?php endforeach ?>
</div>