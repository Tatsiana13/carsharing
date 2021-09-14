<?php


namespace App\Controller;


class Usergroups extends Table
{
    protected string $tableName = "user_groups";
    public function actionShow(): void
    {
        parent::actionShow();
        $this->view->setTemplate("Usergroups/show");

    }
    public function actionShowAdd(): void
    {
        parent::actionShowAdd();
        $this->view->setTemplate("Usergroups/add_edit");
    }
    public function actionShowEdit(): void
    {
        parent::actionShowEdit();
        $this->view->setTemplate("Usergroups/add_edit");
    }
}