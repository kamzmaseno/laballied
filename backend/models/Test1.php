<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "test1".
 *
 * @property integer $user_id
 * @property string $user_name
 * @property integer $age
 *
 * @property Test2 $user
 */
class Test1 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'test1';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'user_name', 'age'], 'required'],
            [['user_id', 'age'], 'integer'],
            [['user_name'], 'string', 'max' => 10]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'user_name' => 'User Name',
            'age' => 'Age',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(Test2::className(), ['item_id' => 'user_id']);
    }
}
