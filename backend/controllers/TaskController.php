<?php

namespace backend\controllers;

use yii\web\Controller;

/**
 * Site controller
 */
class TaskController extends Controller
{
  public function actionSay($message = 'Привет')
  {
      return $this->render('say', ['message' => $message]);
  }
}