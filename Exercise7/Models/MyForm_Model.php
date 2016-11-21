<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "myinput2".
 *
 * @property integer $id
 * @property string $name
 * @property string $nickname
 * @property string $email
 * @property string $home_address
 * @property string $comment
 * @property string $gender
 * @property string $cellphone
 */
class MyForm_Model extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'myinput2';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'nickname', 'email', 'home_address', 'comment', 'gender', 'cellphone'], 'required'],
            [['name', 'nickname', 'email', 'home_address', 'comment', 'gender', 'cellphone'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'nickname' => 'Nickname',
            'email' => 'Email',
            'home_address' => 'Home Address',
            'comment' => 'Comment',
            'gender' => 'Gender',
            'cellphone' => 'Cellphone',
        ];
    }
}
