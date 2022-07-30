<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Karyawan */

$this->title = $model->id_karyawan;
$this->params['breadcrumbs'][] = ['label' => 'Karyawan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="karyawan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_karyawan' => $model->id_karyawan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_karyawan' => $model->id_karyawan], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_karyawan',
            'nama_karyawan',
            'alamat_karyawan',
            'notelp_karyawan',
            'tgl_lahir_karyawan',
            'email_karyawan:email',
            'agama_karyawan',
            'status_karyawan',
        ],
    ]) ?>

</div>
