<?php

use yii\helpers\Url;


/* @var $this yii\web\View */

$this->title = 'Кладовая чудо-магазина';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Привет, дорогой покупатель!</h1>

        <p class="lead">В нашем чудесном магазине ты найдёшь множество <s>китайского хлама втридорого</s> замечательных
        товаров по доступным ценам</p>

        <p><a class="btn btn-lg btn-danger" href="<?= Url::to('/shop')?>">Перейти в каталог</a></p>
    </div>

    <div class="body-content">

    </div>
</div>
