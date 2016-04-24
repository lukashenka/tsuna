<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Контакты';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <section id="services" class="services">
        <div class="background"></div>
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-10 col-lg-offset-1">
                    <h1><?= Html::encode($this->title) ?></h1>
                    <hr class="small">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-skype fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Skype</strong>
                                </h4>
                                <p>dsfsd</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="glyphicon glyphicon-envelope fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Email</strong>
                                </h4>
                                <p>dsfsd</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-phone fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Телефон</strong>
                                </h4>
                                <p>88005553555</p>
                            </div>
                        </div>
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
