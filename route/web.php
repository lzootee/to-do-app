<?php
/**
 * Created by PhpStorm.
 * User: Phuc
 * Date: 1/21/19
 * Time: 9:05 PM
 */
use Todo\Controllers\HomeController;
use Todo\Controllers\WorkController;
use Todo\Utils\Constants;
use Todo\Utils\Request;
use Todo\Utils\Response;

$method = $_SERVER['REQUEST_METHOD'];
$request = new Request();

if (isset($_GET['api'])) {
    $api = $_GET['api'];
    if($method == Constants::METHOD_POST){
        switch ($api){
            case 'all':
                $work = new WorkController();
                Response::setJson();
                echo json_encode($work->all());
                return;
                break;
        }
    }
}

if (isset($_GET['view'])) {
    $view = $_GET['view'];
} else {
    $view = 'home';
    $method = 'GET';
}

switch ($view){
    case 'home':
        if($method == Constants::METHOD_GET){
            $home = new HomeController();
            $home->index();
        }else{
            $home = new HomeController();
            $home->error();
        }
        break;

    case 'add':
        if($method == Constants::METHOD_GET){
            $home = new HomeController();
            $home->add();
        }else if($method == Constants::METHOD_POST){
            $work = new WorkController();
            $work->add($request);
        }

        break;

    case 'edit':
        if($method == Constants::METHOD_GET){
            $wordId = $_GET['id'];
            $home = new HomeController();
            $home->edit($wordId);
        }else if($method == Constants::METHOD_POST){
            $work = new WorkController();
            $work->edit($request);
        }

        break;

    case 'delete':
        if($method == Constants::METHOD_POST){
            $home = new HomeController();
            $home->delete();
        }

        break;

//
    default:
        $home = new HomeController();
        $home->error();
        break;
}
