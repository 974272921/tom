<?php 

namespace app\controller;


 use app\BaseController;


class Demo extends BaseController{


    public function show(){


        $result =[
            'status' => 1,
            'message'=>'ok',
            'result'=>[
               'id'=>1,
            ],
        ];
        $header =[
            'Tooken'=>'e233255',
        ];

            return json($result,202,$header);

    }
    public function request(){

        dump($this->request->param());


    }
}
