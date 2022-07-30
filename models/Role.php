<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "role".
 *
 * @property int $id_role
 * @property int $id_karyawan
 * @property string $name_role
 * @property string $keterangan_role
 *
 * @property Karyawan $karyawan
 */
class Role extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'role';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_karyawan', 'name_role', 'keterangan_role'], 'required'],
            [['id_karyawan'], 'integer'],
            [['name_role', 'keterangan_role'], 'string', 'max' => 255],
            [['id_karyawan'], 'unique'],
            [['id_karyawan'], 'exist', 'skipOnError' => true, 'targetClass' => Karyawan::className(), 'targetAttribute' => ['id_karyawan' => 'id_karyawan']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => \Yii::t('app', 'ID'),
            'fullName' => \Yii::t('app', 'Full Name'),
        ];
    }

    /**
     * Gets query for [[Karyawan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKaryawan()
    {
        return $this->hasOne(Karyawan::className(), ['id_karyawan' => 'id_karyawan']);
    }
}
