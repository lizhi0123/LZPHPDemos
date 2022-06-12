<?php

namespace app\controller;

//use app\Request;
use think\Response;
use think\Request;

abstract class Base
{
    protected  $page = 1;
    protected $pageSize = 5;
    public function  __construct(){
        $this->page = (int)Request()->param('page');
        $this->pageSize = (int)Request()->param('page_size');
    }

    protected function create($data, $msg = '成功', $code = 200, $type = 'json')
    {
        $result = [
            'code' => $code,
            'msg' => $msg,
            'data' => $data
        ];
        // 返回api接口
        return Response::create($result, $type);
    }
}