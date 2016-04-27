<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Контакты';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
    <div class="site-contact-form col-md-6">
        <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>
            <div class="alert alert-success">
                Спасибо, скоро мы с вами свяжемся
            </div>
        <?php endif ?>
        <div class="row">
            <div class="background"></div>
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1">
                    <h2 class="text-center">Обратная связь</h2>
                    <hr class="small">

                    <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                    <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

                    <?= $form->field($model, 'email') ?>

                    <?= $form->field($model, 'subject') ?>

                    <?= $form->field($model, 'body')->textArea(['rows' => 6]) ?>

                    <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                        'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div>
' . Html::submitButton('Отправить', ['class' => 'btn', 'name' => 'contact-button']) . '
</div>',
                    ]) ?>


                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>

    <div class="site-contact col-md-6">
        <section id="services" class="services">
            <div class="background"></div>
            <div class="">
                <div class="row text-center">
                    <div class="col-lg-10 col-lg-offset-1">
                        <h2><?= Html::encode($this->title) ?></h2>
                        <hr class="small">
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-skype fa-stack-1x text-primary"></i>
                            </span>
                                    <h4>
                                        <strong>Skype</strong>
                                    </h4>
                                    <p>uk_joyster</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="glyphicon glyphicon-envelope fa-stack-1x text-primary"></i>
                            </span>
                                    <h4>
                                        <strong>Email</strong>
                                    </h4>
                                    <a href="mailto:uk_joyster@mail.ru">uk_joyster@mail.ru</a>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-phone fa-stack-1x text-primary"></i>
                            </span>
                                    <h4>
                                        <strong>Телефон</strong>
                                    </h4>
                                    <p>+375295332470</p>
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

</div>