<?php
include_once('models/Stat.php');


class StaticController
{
    private $title = 'Neko Mart';
    public function actionIndex()
    {
        $staticModel = new Stat();
        $info = $staticModel->getInfo();
        include_once('views/main/table.php');
        return;

    }
    public function actionCompany()
    {
        $staticModel = new Stat();
        $info = $staticModel->getInfo();
        include_once('views/main/company.php');
        return;

    }
    public function actionContacts()
    {
        $staticModel = new Stat();
        $info = $staticModel->getInfo();
        include_once('views/main/contacts.php');
        return;

    }
    public function actionDelivery()
    {
        $staticModel = new Stat();
        $info = $staticModel->getInfo();
        include_once('views/main/del.php');
        return;

    }
    public function actionPolicy()
    {
        $staticModel = new Stat();
        $info = $staticModel->getInfo();
        include_once('views/main/policy.php');
        return;

    }


}