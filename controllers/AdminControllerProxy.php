<?php

class AdminControllerProxy
{
    private $role;
    private $userModel;
    private $adminController;

    public function __construct()
    {
        $this->userModel = new User();
        $role = $this->userModel->getUserRole();
        $this->role = $role;
        $this->adminController = new AdminController();
        $this->adminController->role = $role;
    }

    public function actionIndex()
    {
        $this->adminController->actionIndex();
    }

    public function actionView($id)
    {
        $this->adminController->actionView($id);
    }

    public function actionAdd()
    {
        $this->adminController->actionAdd();

    }

    public function actionEdit($id)
    {
        $this->adminController->actionEdit($id);

    }

    public function actionDelete($id)
    {

        $this->adminController->actionDelete($id);
    }

}