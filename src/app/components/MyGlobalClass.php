<?php
namespace app\components;

use app\models\EncryptDemo;

class MyGlobalClass extends \yii\base\Component{
    public function init() {
        EncryptDemo::setAttributeEncryptionKeyForModels('password1234');
        parent::init();
    }
}