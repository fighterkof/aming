<?php
namespace aming\wechat;

class Coupon
{
    public static function today()
    {
        exit;
        list($y, $m, $d) = explode('-', date('Y-m-d'));
        return [
            mktime(0, 0, 0, $m, $d, $y),
            mktime(23, 59, 59, $m, $d, $y)
        ];
    }
}
