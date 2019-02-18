Yii2 Bootstrap Pincode Input
============================
Yii2 Bootstrap Pincode Input

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist baha2odeh/yii2-pincode-input "*"
```

or add

```
"baha2odeh/yii2-pincode-input": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?php \Baha2Odeh\PincodeInput\PinCodeInput::widget([
                                'model' => $model,
                                'attribute' => 'pincode',
                                'jsOptions' => [
                                    'hidedigits'=>false,
                                    'inputs'=>4
                                ],
                            
                            ]) ?>
```                            
                            
```php
<?= $form->field($model, 'pincode')->widget(\Baha2Odeh\PincodeInput\PinCodeInput::className(), [
                                'jsOptions' => [
                                    'hidedigits'=>false,
                                    'inputs'=>4
                                ],
                            ])->label(false) ?>
```

JsOPtions
---------
http://fkranenburg.github.io/bootstrap-pincode-input/
