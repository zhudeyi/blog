<?php


namespace App\Http\Controllers\Test;
use Xieheng\Love\Consts\Common\UserConst;

class TestController
{
    public function index()
    {
        $a = UserConst::STATUS_DRAFT;
        $b = UserConst::test();
        dd($b);
        dd(123);
    }
}