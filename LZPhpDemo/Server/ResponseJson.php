<?php
    // 当APP 业务出现异常时的返回
      function  jsonData($code,$message,$data=[]){

        return jsonResponse($code,$message,$data);
    }
    // App 接口请求成功时的返回
     function  jsonSuccessData($data=[]){

        return jsonResponse(code: 200,message:'success',data: $data );
    }
// 返回一个json
     function  jsonResponse($code,$message,$data){

        $content = [
            'code' => $code,
            'msg' => $message,
            'data'=>$data,
        ];
        return json_encode($content);
    }

