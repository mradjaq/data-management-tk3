<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Karyawan;

/**
 * KaryawanSearch represents the model behind the search form of `app\models\Karyawan`.
 */
class KaryawanSearch extends Karyawan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_karyawan'], 'integer'],
            [['nama_karyawan', 'alamat_karyawan', 'notelp_karyawan', 'tgl_lahir_karyawan', 'email_karyawan', 'agama_karyawan', 'status_karyawan'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Karyawan::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_karyawan' => $this->id_karyawan,
            'tgl_lahir_karyawan' => $this->tgl_lahir_karyawan,
        ]);

        $query->andFilterWhere(['like', 'nama_karyawan', $this->nama_karyawan])
            ->andFilterWhere(['like', 'alamat_karyawan', $this->alamat_karyawan])
            ->andFilterWhere(['like', 'notelp_karyawan', $this->notelp_karyawan])
            ->andFilterWhere(['like', 'email_karyawan', $this->email_karyawan])
            ->andFilterWhere(['like', 'agama_karyawan', $this->agama_karyawan])
            ->andFilterWhere(['like', 'status_karyawan', $this->status_karyawan]);

        return $dataProvider;
    }
}
