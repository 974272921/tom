<?php
// 应用公共文件
//通用化方法格式化输出
function show ($status,$message,$data,$httpstatus= 200){

    $result =[
        'status' =>$status,
        'message' =>$message,
        'result'  =>$data,


    ];
    return json($result,$httpstatus);

}