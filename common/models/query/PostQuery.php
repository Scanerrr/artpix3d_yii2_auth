<?php

namespace common\models\query;

/**
 * This is the ActiveQuery class for [[\common\models\Post]].
 *
 * @see \common\models\Post
 */
class PostQuery extends \yii\db\ActiveQuery
{
    public function forUser($userId)
    {
        return $this->andWhere(['user_id' => $userId]);
    }
    public function latest($limit)
    {
        return $this->limit($limit)->orderBy(['id' => SORT_DESC]);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\Post[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\Post|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
