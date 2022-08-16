<?php

class Stat
{

    public function getInfo()
    {
        $connect = DB::getConnection();
        $query = "SELECT `cat_name` FROM `categories`;" ;
        $result = mysqli_query($connect, $query);

        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

}