<?php

class NewsController
{
    public $cont = 'News';

    public function actionAll()
    {
        $items = News::getAll();
        $view = new View;

        $view->items = $items;
        $view->ctrl = $this->cont;

        $view->act = 'One';
        $view->inf = $this->inform;
        $view->edit = $this->edit;

        $view->display('all.php');
    }
    public function actionOne()
    {
        $id = $_GET['id'];
        $item = News::getOne($id);
        $view = new View($item);

        $view->item = $item;
        $view->ctrl = $this->cont;

        $view->display('one.php');
    }
}