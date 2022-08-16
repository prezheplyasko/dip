<?php

class Good
{
    public function getGoods()
    {
        $connect = DB::getConnection();
        $query = "SELECT `good_id`, `good_name`, `good_price` , `good_img`, `country_name`, `brand_name`, `cat_name`  FROM `goods` LEFT JOIN `countries` ON `good_country_id` = `country_id` LEFT JOIN `brands` ON `good_brand_id` = `brand_id` LEFT JOIN `categories` ON `good_cat_id` = `cat_id` WHERE `good_is_del` = 0;" ;
        $result = mysqli_query($connect, $query);

        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

    public function addGood($name)
    {
        $connect = DB::getConnection();
        $query = "
                INSERT INTO `goods`
                    SET `good_name` = '$name';
            ";
        return mysqli_query($connect, $query);
    }

    public function getGoodById($id)
    {
        $connect = DB::getConnection();
        $query = "SELECT `good_id`, `good_name`, `good_price` , `good_descr`, `good_img`, `country_name`, `brand_name`, `cat_name`  FROM `goods` LEFT JOIN `countries` ON `good_country_id` = `country_id` LEFT JOIN `brands` ON `good_brand_id` = `brand_id` LEFT JOIN `categories` ON `good_cat_id` = `cat_id` WHERE `good_is_del` = 0 AND `good_id` = $id GROUP BY `good_id`;" ;


        $result = mysqli_query($connect, $query);
        return mysqli_fetch_assoc($result);
    }

    public function updateGood($name, $id)
    {
        $connect = DB::getConnection();
        $query = "
                UPDATE `goods`
                    SET `good_name` = '$name'
                    WHERE `good_id` = $id;
            ";
        return mysqli_query($connect, $query);
    }

    public function deleteGood($id)
    {
        $connect = DB::getConnection();
        $query = "
                UPDATE `goods`
                    SET `good_is_del` = 1
                    WHERE `good_id` = $id;
            ";
        return mysqli_query($connect, $query);
    }
    public function getGoodInfoForCart($ids)
    {
        $connect = DB::getConnection();
        $idsString = implode(', ', $ids);
        $query = (new Select('goods'))
            ->what(array('good_id', 'good_name', 'good_price'))
            ->where("WHERE `good_id` IN ($idsString)")
            ->build();
        $result = mysqli_query($connect, $query);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
}