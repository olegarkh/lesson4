<?php

class AdminController
              extends NewsController
{
    public $cont = 'Admin';
    public $inform = 'Добавить новость';
    public $edit = 'Редактировать';

    public  function actionNew()
    {
        $view = new View;
        $view->ctrl = $this->cont;
        $view->act = 'Add';

        $view->display('/../admin/editor.php');
    }
    public function actionEdit()
    {
        $id = $_GET['id'];
        $item = News::getOne($id);
        $view = new View($item);

        $view->item = $item;
        $view->ctrl = $this->cont;
        $view->act = 'Save';

        $view->display('/../admin/editor.php');
    }
    public function actionSave()
    {
        $news = new Admin;
        $news->id = $_GET['id'];
        $news->title = $_POST['title'];
        $news->text = $_POST['text'];

        Admin::update($news);
        $this->actionEdit();
    }

    public function actionAdd()
    {
        $news = new Admin;
        $news->title = $_POST['title'];
        $news->text = $_POST['text'];
        Admin::add($news);
    }
}