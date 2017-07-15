<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "result".
 *
 * @property integer $rs_id
 * @property integer $students_std_id
 * @property integer $maths
 * @property integer $physics
 * @property integer $chemistry
 * @property integer $english
 * @property integer $urdu
 * @property integer $total_marks
 * @property string $grade
 *
 * @property Students $studentsStd
 */
class Result extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'result';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['students_std_id', 'maths', 'physics',
             'chemistry', 'english', 'urdu', 'total_marks', 'grade'], 'required'],
            [['students_std_id', 'maths', 'physics', 'chemistry',
             'english', 'urdu', 'total_marks'], 'integer'],
            [['grade'], 'string'],
            [['students_std_id'], 'exist', 'skipOnError' => true,
             'targetClass' => Students::className(),
              'targetAttribute' => ['students_std_id' => 'std_id']],
        ];
    }

  /*  public function beforeSave()
    {
      if(parent::beforeSave())
      {
        if($this->isNewRecord)
        {
          $this->total_marks = 200;
          return true;
        }
      }
    }
*/
    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'rs_id' => 'Rs ID',
            'students_std_id' => 'Student Name',
            'maths' => 'Maths',
            'physics' => 'Physics',
            'chemistry' => 'Chemistry',
            'english' => 'English',
            'urdu' => 'Urdu',
            'total_marks' => 'Total Marks',
            'grade' => 'Grade',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudentsStd()
    {
        return $this->hasOne(Students::className(), ['std_id' => 'students_std_id']);
    }
}
