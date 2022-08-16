<?php

class Feed
{

    public function actionIndex($email,$feed)
    {
        $connect = DB::getConnection();
        $query = "
                INSERT INTO `feedback`
                    SET `fback_email` = '$email',
                        `fback_text` = '$feed';
            ";
        mysqli_query($connect, $query);
        return mysqli_insert_id($connect);
    }

}