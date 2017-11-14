<?php

namespace app\models;

use Yii;
use batsg\models\attrEncrypt\EncryptedActiveRecordTrait;

/**
 * This is the model class for table "encrypt_demo".
 *
 * @property integer $id
 * @property integer $data_status
 * @property integer $created_by
 * @property integer $created_at
 * @property integer $updated_by
 * @property integer $updated_at
 * @property string $date_field_encrypt
 * @property string $string_field_encrypt
 * @property string $integer_field_encrypt
 * @property string $float_field_encrypt
 *
 * @property string $dateField
 * @property string $stringField
 * @property integer $integerField
 * @property float $floatField
 */
class EncryptDemo extends \batsg\models\BaseBatsgModel
{

    use EncryptedActiveRecordTrait;

    static protected $encryptedAttributeDbFields = [
        'dateField' => 'date_field_encrypt',
        'stringField' => 'string_field_encrypt',
        'integerField' => 'integer_field_encrypt',
        'floatField' => 'float_field_encrypt',
    ];

    public function __get($name)
    {
        return $this->getterEncryptedField($name);
    }

    public function __set($name, $value)
    {
        return $this->setterEncryptedField($name, $value);
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'encrypt_demo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['data_status', 'created_by', 'created_at', 'updated_by', 'updated_at'], 'integer'],
            [['date_field_encrypt', 'string_field_encrypt', 'integer_field_encrypt', 'float_field_encrypt'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'data_status' => 'Data Status',
            'created_by' => 'Created By',
            'created_at' => 'Created At',
            'updated_by' => 'Updated By',
            'updated_at' => 'Updated At',
            'date_field_encrypt' => 'Date Encrypt',
            'string_field_encrypt' => 'String Encrypt',
            'integer_field_encrypt' => 'Integer Encrypt',
            'float_field_encrypt' => 'Float Encrypt',
        ];
    }
}
