<?php

namespace app\controller;


class Error{

    public function  __call($name, $arguments)
    {
        
        $result = [
            'status'  => 0 ,
            'message' =>'控制器不存在',
            'result'  =>null,
        ];
        return json($result,400);
    }

}