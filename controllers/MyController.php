<?php


namespace app\controllers;


class MyController extends AppController {

    public function actionIndex ($id = null) {
        $hi = 'Приветики пистолетики :)';
        $names = ['Urakova', 'Darya', 'Vitalevna'];

        if (!$id) $id = 'test';

//        return $this->render('index',['hi' => $hi,'names' => $names]);
        return $this->render('index',compact('hi' ,'names','id'));

    }

}