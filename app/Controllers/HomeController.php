<?php
/**
 * Created by PhpStorm.
 * User: macbookpro
 * Date: 1/21/19
 * Time: 9:06 PM
 */

namespace Todo\Controllers;

use Todo\Models\Work;

class HomeController extends BaseController
{
    public function index()
    {
        $this->render('home');
    }

    public function add()
    {
        $this->render('add');
    }

    public function edit($wordId)
    {
        $work = new Work();
        $item = $work->find($wordId);

        $this->render('edit', ['work'=>$item]);
    }

    public function error()
    {
        $this->render('error');
    }

}