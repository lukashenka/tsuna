<?php
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $products \app\models\db\Product[] */

$this->title = 'My Yii Application';
?>

<!-- Header -->
<header id="top" class="header">
    <div class="text-vertical-center">
        <h1>Tsuna ART</h1>
        <h3>Авторские игрушки ручной работы от Юлии Жак</h3>
        <br>
        <a href="<?= Url::to(['site/about']); ?>" class="btn btn-dark btn-lg">Информация</a>
    </div>
</header>


<!-- About -->
<section id="about" class="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Добро пожаловать на мой сайт!</h2>
                <p class="lead">Рада приветствовать вас в своей мастерской! Вы можете встретить тут и необычных зверей и
                    вполне знакомых, которые станут вам добрыми друзьями!
                </p>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- Callout -->
<aside class="callout">
    <div class="text-vertical-center">
        <h2>Все игрушки ручной работы</h2>
    </div>
</aside>

<!-- Portfolio -->
<section id="portfolio" class="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 text-center">
                <h2>Мои работы</h2>
                <hr class="small">

                <div class="row">
                    <?php foreach ($products as $product): ?>
                        <div class="col-md-4">
                            <div class="portfolio-item">
                                <a href="<?= Url::to(['site/products', "#"=>"item{$product->id}"]); ?>">
                                    <img class="img-portfolio img-responsive" height="400px"
                                         src="data/products/<?= $product->image ?>">
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <!-- /.row (nested) -->
                <a href="<?= Url::to(['site/products']); ?>" class="btn btn-lg btn-dark">Все игрушки</a>
            </div>
            <!-- /.col-lg-10 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>

<!-- Call to Action -->
<aside class="call-to-action bg-primary">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h3>Понравились работы?</h3>
                <a href="#" class="btn btn-lg btn-light">Закажи сейчас!</a>
            </div>
        </div>
    </div>
</aside>