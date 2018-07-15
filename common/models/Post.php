<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\helpers\Url;
use yii\web\Linkable;

/**
 * This is the model class for table "post".
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property int $user_id
 * @property int $created_at
 * @property int $updated_at
 *
 * @property User $user
 */
class Post extends \yii\db\ActiveRecord implements Linkable
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'post';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
//            [['title', 'description', 'user_id', 'created_at', 'updated_at'], 'required'],
            [['description'], 'string'],
//            [['user_id', 'created_at', 'updated_at'], 'integer'],
            [['title'], 'string', 'max' => 70],
//            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'user_id' => 'User ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\PostQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\PostQuery(get_called_class());
    }

    public function extraFields()
    {
        return [
            'author' => 'user',
        ];
    }
    public function getLinks()
    {
        return [
            'self' => Url::to(['post/view', 'id' => $this->id], true),
        ];
    }
}
