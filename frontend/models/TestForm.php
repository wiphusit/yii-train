<?php

namespace frontend\models;

use yii\base\Model;

class TestForm extends Model {

    public $fname;
    public $lname;

    public function rules() {
        return[
            [['fname','lname'], 'required'],
            [['lname'], 'email'],
        ];
    }

    public function attributeLabels() {
        return[
            'fname' => 'ชื่อ',
            'lname' => 'อีเมล์'
        ];
    }

}
