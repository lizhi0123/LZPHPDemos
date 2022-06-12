<?php

namespace app\controller;

use think\Response;

abstract class Base
{
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