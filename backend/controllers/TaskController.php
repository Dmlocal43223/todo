<?php

namespace backend\controllers;

use common\models\search\TaskSearch;
use common\models\Task;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class TaskController extends Controller
{
  public function actionIndex()
  {
    $searchModel = new TaskSearch;
    $dataProvider = $searchModel->search($this->request->queryParams);

    return $this->render('index', [
      'searchModel' => $searchModel,
      'dataProvider' => $dataProvider,
    ]);
  }

  public function actionView(int $id)
  {
      return $this->render('view', [
          'model' => $this->findModel($id),
      ]);
  }

  public function actionCreate()
  {
      $model = new Task();

      if ($this->request->isPost) {
          if ($model->load($this->request->post()) && $model->save()) {
              return $this->redirect(['view', 'id' => $model->id]);
          }
      } else {
          $model->loadDefaultValues();
      }

      return $this->render('create', [
          'model' => $model,
      ]);
  }

  protected function findModel($id)
  {
      if (($model = Task::findOne(['id' => $id])) !== null) {
          return $model;
      }

      throw new NotFoundHttpException('The requested page does not exist.');
  }
}