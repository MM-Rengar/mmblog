<?php
namespace app\home\controller;
use app\common\Web;
class Index extends Web
{
    public function index()
    {
		$info = $request->header();
		var_dump($info);
    }
}
