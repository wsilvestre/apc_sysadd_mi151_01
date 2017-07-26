<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "prospect_email".
 *
 * @property integer $id
 *
 * @property Prospect $id0
 * @property Email $id1
 */
class ProspectEmail extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'prospect_email';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => Prospect::className(), 'targetAttribute' => ['id' => 'id']],
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => Email::className(), 'targetAttribute' => ['id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getId0()
    {
        return $this->hasOne(Prospect::className(), ['id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getId1()
    {
        return $this->hasOne(Email::className(), ['id' => 'id']);
    }
}
