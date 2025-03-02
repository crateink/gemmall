<?php

namespace App\Controllers;

class MyController extends BaseController
{
    // 个人资料
    public function profileView(): string
    {
        return view('my/profile');
    }

    // 修改密码
    public function changePasswordView(): string
    {
        return view('my/change_password');
    }

    // 我的订单
    public function ordersView(): string
    {
        return view('my/orders');
    }

    // 优惠券
    public function couponView(): string
    {
        return view('my/coupon');
    }

    // 签到
    public function checkInView(): string
    {
        return view('my/check_in');
    }

    // 积分
    public function pointsView(): string
    {
        return view('my/points');
    }

    public function affiliateView(): string
    {
        return view('my/affiliate');
    }
}
