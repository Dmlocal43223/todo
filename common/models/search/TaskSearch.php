<?php

namespace common\models\search;

use common\models\Task;
use yii\data\ActiveDataProvider;

class TaskSearch extends Task
{
  public function rules(): array
  {
      return [
          [[], 'safe']
      ];
  }

  public function search($params): ActiveDataProvider
  {
      $query = self::find();

      $dataProvider = new ActiveDataProvider([
          'query' => $query,
          'pagination' => [
            'pageSize' => 25,
        ],

      ]);

      $this->load($params);

      if (!$this->validate()) {
          return $dataProvider;
      }

      $query->andFilterWhere([
          'title' => $this->title,
          'description' => $this->description,
          'status' => $this->status,
          'plan_date' => $this->plan_date,
          'close_information' => $this->close_information,
      ]);

      return $dataProvider;
  }
}