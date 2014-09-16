<?php
/* @var $this UsersController */
/* @var $model Users */
/* @var $form CActiveForm */
?>

<div class="form">
<?php if(Yii::app()->user->hasFlash('success')):?>
    <div class="info">
        <?php echo Yii::app()->user->getFlash('success'); ?>
    </div>
<?php endif; ?>

<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'users-signup-form',
    // Please note: When you enable ajax validation, make sure the corresponding
    // controller action is handling ajax validation correctly.
    // See class documentation of CActiveForm for details on this,
    // you need to use the performAjaxValidation()-method described there.
    'enableAjaxValidation'=>false,
)); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <div class="control-group">
        <?php echo $form->labelEx($model,'email', array('class'=>'control-label')); ?>
        <div class="controls">
        	<?php echo $form->emailField($model,'email'); ?>
   		</div>
        <?php echo $form->error($model,'email'); ?>
    </div>

    <div class="control-group">
        <?php echo $form->labelEx($model,'username', array('class'=>'control-label')); ?>
        <div class="controls">
        	<?php echo $form->textField($model,'username'); ?>
    	</div>
        <?php echo $form->error($model,'username'); ?>
    </div>

    <div class="control-group">
        <?php echo $form->labelEx($model,'password', array('class'=>'control-label')); ?>
        <div class="controls">
        	<?php echo $form->passwordField($model,'password'); ?>
        </div>
        <?php echo $form->error($model,'password'); ?>
    </div>

   


    <div class="control-group buttons">
        <?php echo CHtml::submitButton('SignUp',array('class'=>'btn btn-success')); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->