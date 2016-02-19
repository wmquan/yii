<?php namespace app\models;
/**
 * Created by PhpStorm.
 * User: wenmingquan
 * Date: 2016/2/19
 * Time: 13:43
 */
use yii\db\ActiveRecord;

class User extends ActiveRecord
//class User extends ActiveRecord implements \yii\web\IdentityInterface
{
    public function findIdentity($id)
    {
        return $this->findIdentity($id);
    }

    public function getId()
    {
        return $this->getId();
    }
}