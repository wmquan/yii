<?php namespace app\models;
/**
 * Created by PhpStorm.
 * User: wenmingquan
 * Date: 2016/2/19
 * Time: 13:43
 */
use yii\db\ActiveRecord;

class User extends ActiveRecord
{
    public function findIdentity($id)
    {
        return $this->findIdentity($id);
    }
}