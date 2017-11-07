<?php
namespace app\commands;

use yii\console\Controller;
use app\models\EncryptDemo;

class EncryptDemoController extends Controller
{
    public function actionCreate()
    {
        EncryptDemo::setAttributeEncryptionKeyForModels('password1234');

        $encryptDemo = EncryptDemo::findOneCreateNew(['id' => 1]);
        $encryptDemo->dateField = '2017/10/22';
        $encryptDemo->stringField = "my string {$encryptDemo->id}";
        $encryptDemo->integerField = 12345;
        $encryptDemo->floatField = 123.45;
        $encryptDemo->save();
        $this->printR($encryptDemo);

        $encryptDemo = EncryptDemo::findOneCreateNew(['id' => 2]);
        $encryptDemo->dateField = '2017/10/22';
        $encryptDemo->stringField = "my string {$encryptDemo->id}";
        $encryptDemo->integerField = 12345;
        $encryptDemo->floatField = 123.45;
        $encryptDemo->save();
        $this->printR($encryptDemo);
    }

    private function printR(EncryptDemo $encryptDemo)
    {
        $fields = ['id',
            'dateField', 'date_field_encrypt',
            'stringField', 'string_field_encrypt',
            'integerField', 'integer_field_encrypt',
            'floatField', 'float_field_encrypt',
        ];
        $values = [];
        foreach ($fields as $field) {
            $values[$field] = $encryptDemo->$field;
        }
        print_r($values);
    }

    public function actionUpdate()
    {
        EncryptDemo::setAttributeEncryptionKeyForModels('password1234');

        $encryptDemos = EncryptDemo::find()->all();
        foreach ($encryptDemos as $encryptDemo) {
            $this->printR($encryptDemo);
        }
    }
}
