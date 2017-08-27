<?php
/* @var $this yii\web\View
 * @var $product \app\models\Product
 */
use yii\helpers\Url;
?>

<h1><?= $product->name ?></h1>
<h3>Описание:</h3>
<p><?= $product->description ?></p>
<a class="btn btn-lg btn-danger" href="<?= Url::to('/shop/' . $product->id)?>">Купить за <?= $product->price ?> руб.</a>
