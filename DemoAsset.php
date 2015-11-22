<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\modules\simplechat;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class DemoAsset extends AssetBundle
{
    public $sourcePath = '@frontend/modules/simplechat/assets';
    public $css = [
        '//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css',
        'css/chat.css',
    ];
    public $js = [
        'js/chat.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
