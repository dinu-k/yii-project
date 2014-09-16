<?php
/* @var $this PostsController */
/* @var $model Posts */
/* @var $form CActiveForm */
?>
<div id="container">

    <?php if(Yii::app()->user->hasFlash('success')):?>
    <div class="info">
        <?php echo Yii::app()->user->getFlash('success'); ?>
    </div>
<?php endif; ?>

<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'posts-createpost-form',
    // Please note: When you enable ajax validation, make sure the corresponding
    // controller action is handling ajax validation correctly.
    // See class documentation of CActiveForm for details on this,
    // you need to use the performAjaxValidation()-method described there.
    'enableAjaxValidation'=>false,
    'htmlOptions'=>array(
                          'class'=>'form-horizontal',
                        ),
)); ?>

    <div class="form-group">
            <legend>Edit Post <?php echo $model->title; ?></legend>
    </div>

    <?php echo $form->errorSummary($model); ?>

    <div class="form-group">
        <?php echo $form->labelEx($model,'title', array('class'=>'control-label')); ?>
        <?php echo $form->textField($model,'title', array('class'=>'form-control')); ?>
        <?php echo $form->error($model,'title'); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model,'description', array('class'=>'control-label')); ?>
        <?php echo $form->textArea($model,'description', array('class'=>'form-control')); ?>
        <?php echo $form->error($model,'description'); ?>
    </div>


    <div class="form-group">
        <div class="col-sm-10 ">
          <?php echo CHtml::submitButton('Save', array('class'=>'btn btn-primary')); ?>
        </div>
    </div>

<?php $this->endWidget(); ?>


</div>