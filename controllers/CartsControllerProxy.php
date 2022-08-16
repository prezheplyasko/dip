<?php

class CartsControllerProxy
{

    private $cartController;
    private $userModel;

    public function __construct()
    {
        $this->cartController = new CartsController();
        $this->userModel = new User();
        $this->cartController->role = $this->userModel->getUserRole();
    }

    public function actionIndex()
    {
        $this->cartController->actionIndex();
    }
}