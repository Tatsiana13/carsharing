<?php

namespace App\Controller;

use App\Model\CarModel;
use W1020\Table as ORMTable;

class Newcar extends Car
{
    public function actionShow(): void
    {
        parent::actionShow();
        $this->view->setTemplate("Newcar/show");
    }

    public function actionShowBook()
    {
        $this
            ->view
            ->addData(["carData" => $this->model->getRow($_GET["id"])])
            ->setTemplate("Newcar/show_book");
    }

    public function actionBook()
    {
        print_r($_POST);
        $this->model->setTableName("booking")->ins($_POST);
        $this->redirect("?type=newcar&action=confirm");
    }
    public function actionConfirm()
    {
        $this->view->setTemplate("Newcar/confirm");

    }



}