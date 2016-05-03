<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Информация';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <section id="services" class="services">
        <div class="background"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1">
                    <h1 class="text-center"><?= Html::encode($this->title) ?></h1>
                    <hr class="small">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="content-info">
                                <?= $content ?>
                            </div>
                        </div> <!-- end of wrapper -->

                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
</div>
