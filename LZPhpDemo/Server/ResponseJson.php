<?php

trait  ResponseJson {
    // 当APP 业务出现异常时的返回
    public  function  jsonData($code,$message,$data=[]){

        return $this->jsonResponse($code,$message,$data);
    }
    // App 接口请求成功时的返回
    public function  jsonSuccessData($data=[]){

        return $this->jsonResponse(code: 200,message:'success',data: $data );
    }
// 返回一个json
    public function  jsonResponse($code,$message,$data){

        $content = [
            'code' => $code,
            'msg' => $message,
            'data'=>$data,
        ];
        return json_encode($content);
    }
}

