<?php

namespace common\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "task".
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $created_at
 * @property int $points
 * @property int $status
 * @property string $plan_date
 * @property string $close_information
 * @property string $completed_at
 *
 */
class Task extends ActiveRecord
{
  public static function tableName(): string
  {
      return 'task';
  }

  public function rules(): array
  {
      return [
          [['points', 'status'], 'integer'],
          [['title', 'description', 'created_at', 'plan_date', 'close_information', 'completed_at'], 'string'],
          [['title', 'description', 'plan_date'], 'required'],
      ];
  }

  public function attributeLabels(): array
  {
      return [
          'id' => 'ID',
          'title' => 'Название',
          'description' => 'Описание',
          'created_at' => 'Дата создания',
          'points' => 'Очки',
          'status' => 'Статус',
          'plan_date' => 'Планируемая дата выполнения',
          'close_information' => 'Информация закрытия',
          'completed_at' => 'Дата выполнения'
      ];
  }
}