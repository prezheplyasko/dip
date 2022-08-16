<?php

class FeedController
{

    private $title;

    public function actionIndex()
    {
        $this->title = 'Сообщения';

        if (isset($_POST['email'])) {
            $email = htmlentities($_POST['email']);
            $feed = htmlentities($_POST['feed']);
            $feedModel = new Feed();
            $userId = ($feedModel->actionIndex($email,$feed));


        }
        include_once('./views/common/feedback.php');
        return;
    }
}