<?php

class Cart
{

    public function addOrder($orderDetails, $user)
    {
        $connect = DB::getConnection();
        $query = "
                INSERT INTO `orders`
                    SET `order_user_id` = $user,
                        `order_status_id` = 1;
            ";
        mysqli_query($connect, $query);
        $orderId = mysqli_insert_id($connect);
        $str = "INSERT INTO `cart`(`cart_good_id`, `cart_order_id`, `cart_good_count`) VALUES ";
        foreach ($orderDetails as $goodId => $goodCount) {
            $str .= "($goodId, $orderId, $goodCount), ";
        }
        $str = rtrim($str, ', ');
        return mysqli_query($connect, $str);
    }
}