<?php

/* @var $this yii\web\View */
/* @var $products \app\models\db\Product[] */

$this->title = 'My Yii Application';
?>
<!-- Portfolio -->
<section id="portfolio" class="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1">
                <h1 class="text-center">Мои работы</h1>
                <hr class="small">
                <div id="portfolio">
                    <?php foreach ($products as $product): ?>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="portfolio-item" id="item<?= $product->id ?>">
                                    <a href="#">
                                        <img class="img-portfolio img-responsive" height="400px"
                                             src="data/products/<?= $product->image ?>">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="portfolio-list">
                                    <ul>
                                        <li><strong>Название: </strong><?= $product->name ?></li>
                                        <li><strong>Цена: </strong><?= $product->price ?> р.</li>
                                        <li><strong>Описание: </strong><?= $product->description ?> р.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
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