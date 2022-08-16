<?php

class GoodsControllerProxy
{
    private $role;
    private $userModel;
    private $goodsController;

    public function __construct()
    {
        $this->userModel = new User();
        $role = $this->userModel->getUserRole();
        $this->role = $role;
        $this->goodsController = new GoodsController();
        $this->goodsController->role = $role;
    }

    public function actionIndex()
    {
        $this->goodsController->actionIndex();
    }

    public function actionView($id)
    {
        $this->goodsController->actionView($id);
    }



}