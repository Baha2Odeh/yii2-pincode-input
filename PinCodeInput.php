<?php

namespace Baha2Odeh\PincodeInput;
use yii\widgets\InputWidget;

/**
 * This is just an example.
 */
class PinCodeInput extends InputWidget
{
    /** @var string HTML tag type of the widget input ("tel" by default) */
    public $htmlTagType = 'text';
    /** @var array Default widget options of the HTML tag */
    public $defaultOptions = ['class'=>'form-control'];
    /**
     * @link https://github.com/fkranenburg/bootstrap-pincode-input More information about JS-widget options.
     * @var array Options of the JS-widget
     */
    public $jsOptions = [];

    public function init()
    {
        parent::init();
        PinCodeInputAsset::register($this->view);
        $id = ArrayHelper::getValue($this->options, 'id');
        $jsOptions = $this->jsOptions ? Json::encode($this->jsOptions) : "";
        $jsInit = <<<JS
(function ($) {
    "use strict";
    $('#$id').pincodeInput($jsOptions);
})(jQuery);
JS;
        $this->view->registerJs($jsInit);
    }

    /**
     * @return string
     */
    public function run()
    {
        $options = ArrayHelper::merge($this->defaultOptions, $this->options);
        if ($this->hasModel()) {
            return Html::activeInput($this->htmlTagType, $this->model, $this->attribute, $options);
        }
        return Html::input($this->htmlTagType, $this->name, $this->value, $options);
    }
}
