<?php

use yii\helpers\Url;


/* @var $this yii\web\View */

$this->title = 'Кладовая чудо-магазина';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Привет, кладовщик!</h1>

        <p class="lead">Ты всё-таки смог сюда попасть и теперь товары в твоём распоряжении!</p>

        <p><a class="btn btn-lg btn-danger" href="<?= Url::to('product')?>">Управление товарами</a></p>
    </div>

    <div class="body-content">

    </div>
</div>
