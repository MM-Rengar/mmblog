<?php
namespace app\home\controller;
use app\common\Web;
class Index extends Web
{
    public function index()
    {
		$info = $this->request->header();
		var_dump($info);
echo 1;
    }
}
