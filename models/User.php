<?php

class User
{

    public function checkIfEmailExists($email)
    {
        $connect = DB::getConnection();
        $query = (new Select('users'))
            ->what(['count' => 'COUNT(*)'])
            ->where("WHERE `user_email` = '$email'")
            ->build();
        $result = mysqli_query($connect, $query);
        return mysqli_fetch_assoc($result)['count'];
    }

    public function checkUserByEmailAndPassword($email, $password)
    {
        $connect = DB::getConnection();
        $query = "SELECT `user_id` FROM `users` WHERE `user_email` = '$email' AND `user_pass` = '$password';";

        $result = mysqli_query($connect, $query);
        return mysqli_fetch_assoc($result)['user_id'];
    }

    public function registerUser($email, $password)
    {
        $connect = DB::getConnection();
        $query = "
                INSERT INTO `users`
                    SET `user_email` = '$email',
                        `user_pass` = '$password';
            ";
        mysqli_query($connect, $query);
        return mysqli_insert_id($connect);
    }

    public function authUser($userId)
    {
        $helper = new Helper();
        $token = $helper->generateToken();
        $tokenTime = time() + 15 * 60;
        setcookie('user', $userId, time() + 2 * 24 * 60 * 60, '/');
        setcookie('token', $token, time() + 2 * 24 * 60 * 60, '/');
        setcookie('token_time', $tokenTime, time() + 2 * 24 * 60 * 60, '/');
        $connect = DB::getConnection();
        $query = "
                INSERT INTO `connects`
                    SET `connect_token` = '$token',
                        `connect_user_id` = $userId,
                        `connect_token_time` = FROM_UNIXTIME($tokenTime);
            ";
        return mysqli_query($connect, $query);
    }

    public function getUserRole()
    {
        if (isset($_COOKIE['user']) && isset($_COOKIE['token'])
            && isset($_COOKIE['token_time'])) {
            $userId = $_COOKIE['user'];
            $token = $_COOKIE['token'];
            $tokenTime = $_COOKIE['token_time'];
            $connect = DB::getConnection();
            $query =(new Select('connects'))
                ->what(['connect_id', 'role' => 'user_role_id', 'count' => 'COUNT(*)'])
                ->join([
                    array('type' => 'LEFT', 'table' => 'users',
                        'key1' => '`user_id`', 'key2' => '`connect_user_id`'
                    )
                ])
                ->where("WHERE `connect_user_id` = $userId 
                                    AND `connect_token` = '$token'")
                ->build();
            $result = mysqli_query($connect, $query);
            $userInfo = mysqli_fetch_assoc($result);
            if ($userInfo['count']) {
                if (time() > $tokenTime) {
                    $helper = new Helper();
                    $newToken = $helper->generateToken();
                    $newTokenTime = time() + 15 * 60;
                    setcookie('user', $userId, time() + 2 * 24 * 60 * 60, '/');
                    setcookie('token', $newToken, time() + 2 * 24 * 60 * 60, '/');
                    setcookie('token_time', $newTokenTime, time() + 2 * 24 * 60 * 60, '/');
                    $connect = DB::getConnection();
                    $query = "
                                UPDATE `connects`
                                    SET `connect_token` = '$newToken',
                                        `connect_token_time` = FROM_UNIXTIME($newTokenTime)
                                WHERE `connect_id` = $userInfo[connect_id];
                            ";
                    mysqli_query($connect, $query);
                }
                if ($userInfo['role'] === '2') {
                    return 'Admin';
                } else {
                    return 'User';
                }
            }
        }
        return 'Guest';
    }
}