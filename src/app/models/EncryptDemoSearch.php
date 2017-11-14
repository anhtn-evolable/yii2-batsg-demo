<?php

namespace app\models;

use app\models\EncryptDemo;
use batsg\models\attrEncrypt\EncryptedActiveRecordSearchTrait;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use yii\data\ArrayDataProvider;

/**
 * EncryptDemoSearch represents the model behind the search form about `app\models\EncryptDemo`.
 */
class EncryptDemoSearch extends EncryptDemo
{
    use EncryptedActiveRecordSearchTrait;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'data_status', 'created_by', 'created_at', 'updated_by', 'updated_at'], 'integer'],
            [['date_field_encrypt', 'string_field_encrypt', 'integer_field_encrypt', 'float_field_encrypt'], 'safe'],
            [self::encryptedAttributes(), 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = EncryptDemo::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => FALSE,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'data_status' => $this->data_status,
            'created_by' => $this->created_by,
            'created_at' => $this->created_at,
            'updated_by' => $this->updated_by,
            'updated_at' => $this->updated_at,
        ]);

        return new ArrayDataProvider([
            'allModels' => $this->filterModels($dataProvider->getModels()),
        ]);
    }
}
