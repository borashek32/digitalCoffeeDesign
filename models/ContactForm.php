<?php

namespace app\models;

use Yii;
use yii\base\Model;

class ContactForm extends Model
{
    public $name;
    public $email;
    public $body;

    public function rules()
    {
        return [
            [['name', 'email', 'body'], 'required'],
            ['body', 'string', 'min' => 20],
            ['email', 'email'],
        ];
    }

    public function contact($email)
    {
        $body = "Name: {$this->name}<br>Email: {$this->email}";

        if ($this->validate()) {
            Yii::$app->mailer->compose()
                ->setTo('borashek29@gmail.com')
                ->setFrom([Yii::$app->params['senderEmail'] => Yii::$app->params['senderName']])
                ->setReplyTo([$this->email => $this->name])
                ->setSubject('Lemma Auto')
                ->setTextBody($this->body)
                ->send();

            return true;
        }
        return false;
    }
}
