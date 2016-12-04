<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[TriviasModel]].
 *
 * @see TriviasModel
 */
class TriviasQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return TriviasModel[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return TriviasModel|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
