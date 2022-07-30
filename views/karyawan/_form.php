<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Karyawan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="karyawan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_karyawan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat_karyawan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'notelp_karyawan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_lahir_karyawan')->textInput() ?>

    <?= $form->field($model, 'email_karyawan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'agama_karyawan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status_karyawan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
