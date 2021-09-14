<?php

namespace App\Controller;

use App\Model\CarModel;
use W1020\Table as ORMTable;

class Car extends Table
{
    protected string $tableName = "car";

    public function actionShow(): void
    {
        parent::actionShow();
        $this->view->setTemplate("Car/show");

    }

    public function actionShowEdit(): void
    {
        parent::actionShowEdit();
        $this->view->setTemplate("Car/add_edit");
    }

    public function actionShowAdd(): void
    {
        parent::actionShowAdd();
        $this->view->setTemplate("Car/add_edit");
    }

    public function actionAdd(): void
    {
        $_POST['picture'] = $_FILES['picture']['name'];
        $id = $this->model->ins($_POST);
        move_uploaded_file(
            $_FILES['picture']['tmp_name'],
            __DIR__ . "/../../public/images/cars/{$id}_" . $_FILES['picture']['name']
        );
        $this->redirect("?type={$this->getCurrentClass()}&action=show");
    }

}