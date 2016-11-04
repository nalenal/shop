<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Carousel;

/**
 * CarouselSearch represents the model behind the search form about `common\models\Carousel`.
 */
class CarouselSearch extends Carousel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'is_active', 'category_id'], 'integer'],
            [['imagename', 'description', 'title'], 'safe'],
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
        $query = Carousel::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'is_active' => $this->is_active,
            'category_id' => $this->category_id,
        ]);

        $query->andFilterWhere(['like', 'imagename', $this->imagename])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'title', $this->title]);

        return $dataProvider;
    }
}
