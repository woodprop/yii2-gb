<h1>Католог товаров</h1>
<hr>
<?php

use yii\helpers\Url;
/* @var $this yii\web\View
 * @var $products \app\models\Product
 */

foreach ($products as $product):
?>
<h2><?= $product->name ?></h2>

<p>
<?= $product->description ?>

</p>
<h4>Цена: <?= $product->price ?> руб.</h4>
<a class="btn btn-sm btn-success" href="<?= Url::to('/shop/' . $product->id)?>">Подробнее</a>

<?php endforeach;