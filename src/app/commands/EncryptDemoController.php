<?php
namespace app\commands;

use yii\console\Controller;
use app\models\EncryptDemo;
use batsg\helpers\HDateTime;

class EncryptDemoController extends Controller
{
    public function actionCreate()
    {
        EncryptDemo::setAttributeEncryptionKeyForModels('password1234');

        $startDate = HDateTime::createFromString('2017/10/22');
        for ($i = 1; $i <= 50; $i++) {
            $encryptDemo = EncryptDemo::findOneCreateNew(['id' => $i]);
            $encryptDemo->dateField = $startDate->nextNDay($i)->toDateStr();
            $encryptDemo->stringField = "my string $i";
            $encryptDemo->integerField = 12345 + $i;
            $encryptDemo->floatField = 123.45 + $i / 100;
            $encryptDemo->save();
        }
        echo "DONE";
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
