<?php

class UsersController
{

    private $title;
    private $role;
    private $userModel;

    public function __construct()
    {
        $this->userModel = new User();
        $this->role = $this->userModel->getUserRole();
    }
    public function actionAuth()
    {
        $this->title = 'Авторизация';
        $errors = [];
        if (isset($_POST['email'])) {
            $email = htmlentities($_POST['email']);
            $password = htmlentities($_POST['password']);
            $userModel = new User();
            $userId = ($userModel->checkUserByEmailAndPassword($email, $password));
            if ($userId > 0){
                $this->userModel->authUser($userId);
                header('Location: ' . FULL_SITE_ROOT . 'main');
            } else{
                $errors[] = 'Такой пользователь не найден';


            }

        }
        include_once('./views/users/auth.php');
        return;
    }
    public function actionRegister()
    {
        $this->title = 'Регистрация';
        $errors = [];
        if (isset($_POST['email'])) {
            $email = htmlentities($_POST['email']);

            $password = htmlentities($_POST['password']);
            $repeatPassword = htmlentities($_POST['repeat_password']);
            if ($password !== $repeatPassword) {
                $errors[] = 'Пароли не совпадают!';
            }

            $userModel = new User();
            if ($userModel->checkIfEmailExists($email)) {
                $errors[] = 'Такой пользователь уже существует';
            }
            if (empty($errors)) {

                $userId = $userModel->registerUser($email, $password);
                if ($userModel->authUser($userId)) {
                    header('Location: ' . FULL_SITE_ROOT . 'main');
                }
                $errors[] = 'Не получилось авторизироваться. Попробуйте позже';
            }

        }

        include_once('./views/users/register.php');
        return;
    }
}