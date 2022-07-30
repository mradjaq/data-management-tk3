<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "karyawan".
 *
 * @property int $id_karyawan
 * @property string $nama_karyawan
 * @property string $alamat_karyawan
 * @property string $notelp_karyawan
 * @property string $tgl_lahir_karyawan
 * @property string $email_karyawan
 * @property string $agama_karyawan
 * @property string $status_karyawan
 *
 * @property Role $role
 */
class Karyawan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'karyawan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_karyawan', 'alamat_karyawan', 'notelp_karyawan', 'tgl_lahir_karyawan', 'email_karyawan', 'agama_karyawan', 'status_karyawan'], 'required'],
            [['tgl_lahir_karyawan'], 'safe'],
            [['nama_karyawan', 'alamat_karyawan', 'notelp_karyawan', 'email_karyawan', 'agama_karyawan', 'status_karyawan'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_karyawan' => 'Id Karyawan',
            'nama_karyawan' => 'Nama Karyawan',
            'alamat_karyawan' => 'Alamat Karyawan',
            'notelp_karyawan' => 'Notelp Karyawan',
            'tgl_lahir_karyawan' => 'Tgl Lahir Karyawan',
            'email_karyawan' => 'Email Karyawan',
            'agama_karyawan' => 'Agama Karyawan',
            'status_karyawan' => 'Status Karyawan',
        ];
    }

    /**
     * Gets query for [[Role]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRole()
    {
        return $this->hasOne(Role::className(), ['id_karyawan' => 'id_karyawan']);
    }
}
