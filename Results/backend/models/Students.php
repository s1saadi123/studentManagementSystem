<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "students".
 *
 * @property integer $std_id
 * @property string $std_name
 * @property string $std_email
 * @property string $std_contact_no
 * @property string $std_address
 * @property integer $std_class
 */
class Students extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'students';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['std_name', 'std_email', 'std_contact_no', 'std_address', 'std_class'], 'required'],
            [['std_contact_no', 'std_class','std_id'], 'integer'],
            [['std_address'], 'string'],
            [['std_name', 'std_email'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'std_id' => 'Student ID',
            'std_name' => 'Name',
            'std_email' => 'Email',
            'std_contact_no' => 'Contact No',
            'std_address' => 'Address',
            'std_class' => 'Class',
        ];
    }
}
