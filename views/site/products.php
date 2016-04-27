<?php
use yii\helpers\Url;
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
                <div id="portfolio-all">
                    <?php foreach ($products as $product): ?>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="portfolio-item" id="item<?= $product->id ?>">
                                    <a class="example-image-link" href="data/products/<?= $product->image ?>" data-lightbox="example-set">
                                        <img class="img-portfolio img-responsive" height="400px"
                                             src="data/products/<?= $product->image ?>">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="portfolio-list">
                                    <div class="list-group">
                                        <div class="list-group-item">
                                            <h4 class="list-group-item-heading">Название</h4>
                                            <p class="list-group-item-text"><?= $product->name ?></p>
                                        </div>
                                        <div class="list-group-item">
                                            <h4 class="list-group-item-heading">Цена</h4>
                                            <p class="list-group-item-text"><span class="price"><?= $product->price ?> р.</span> </p>
                                        </div>
                                        <div class="list-group-item">
                                            <h4 class="list-group-item-heading">Описание</h4>
                                            <p class="list-group-item-text"><?= $product->description ?></p>
                                        </div>
                                    </div>
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
                <a href="<?= Url::to(['site/contact']); ?>" class="btn btn-lg btn-light">Закажи сейчас!</a>
            </div>
        </div>
    </div>
</aside>