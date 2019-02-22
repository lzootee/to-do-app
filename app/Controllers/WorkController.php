<?php
/**
 * Created by PhpStorm.
 * User: macbookpro
 * Date: 1/22/19
 * Time: 9:03 PM
 */

namespace Todo\Controllers;


use Todo\Models\Work;
use Todo\Utils\Constants;
use Todo\Utils\Request;

class WorkController extends BaseController
{
    public function add(Request $request)
    {
        $workData = [
            'name' => $request->get('name'),
            'date_start' => $request->get('start_date'),
            'date_end' => $request->get('end_date'),
            'status' => $request->get('status')
        ];

        $work = new Work();

        if($work->create($workData)){
            $this->render('add', ['success' => 'Add work success']);
        }else{
            $this->render('add', ['error' => 'Add work failed']);
        }
    }

    public function edit(Request $request)
    {
        $workData = [
            'name' => $request->get('name'),
            'date_start' => $request->get('start_date'),
            'date_end' => $request->get('end_date'),
            'status' => $request->get('status')
        ];

        $work = new Work();

        $item = $work->find($request->get('id'));

        if($work->update($request->get('id'),$workData)){
            $this->render('edit', ['success' => 'Update work success','work'=>$item]);
        }else{
            $this->render('edit', ['error' => 'Update work failed','work'=>$item]);
        }
    }

    public function delete()
    {
        $work = new Work();
        if($work->delete(1)){
            echo "SUCCESS";
        }else{
            echo "ERROR";
        }
    }

    public function all()
    {
        $work = new Work();
        return $work->all();
    }
}