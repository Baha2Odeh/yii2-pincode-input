<?php
/**
 * Created by PhpStorm.
 * User: bahaaodeh
 * Date: 2/18/19
 * Time: 1:07 PM
 */

namespace Baha2Odeh\PincodeInput;
use yii\web\AssetBundle;


class PinCodeInputAsset extends AssetBundle
{
    /** @var string */
    public $sourcePath = '@bower/intl-tel-input';
    /** @var array */
    public $css = ['build/css/intlTelInput.css'];
    /** @var array */
    public $js = [
        'build/js/utils.js',
        'build/js/intlTelInput.min.js',
    ];
    /** @var array */
    public $depends = ['yii\web\JqueryAsset'];
}