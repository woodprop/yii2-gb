<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\Product;
class ShopController extends Controller
{
    public function actionIndex()
    {
        $products = Product::find()->all();
        return $this->render('index', ['products' => $products]);
    }

    public function actionView($id = null)
    {
        $product = Product::findOne($id);
        return $this->render('view', ['product' => $product]);
    }




}
