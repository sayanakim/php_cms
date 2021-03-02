<?php


namespace app\controllers;

use app\controllers\AppController;
use ishop\App;
use ishop\Cache;
use RedBeanPHP\R;

class MainController extends AppController
{
    public function indexAction()
    {
////        debug($this->route);
////        debug($this->controller);
////        echo __METHOD__;
//        $posts = R::findAll('test');
////       debug($posts);
//
//        $name = 'Sayana';
//        $age = 37;
//        $names = ['Roman', 'Artur', 'Aldar'];
//        $cache = Cache::instance();
////        $cache->set('test', $names);
//        $cache->delete('test');
//        $data = $cache->get('test');
//        if (!$data) {
//            $cache->set('test', $names);
//        }
////        debug($data);
        $this->set(compact('name', 'age', 'names', 'posts'));
    }
}