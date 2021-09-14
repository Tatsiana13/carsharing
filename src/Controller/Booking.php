<?php

namespace App\Controller;

use W1020\Table as ORMTable;
use App\Model\BookingModel;

class Booking extends Table
{
    protected string $tableName = "booking";

//            ->view();


    public function __construct()
    {
        parent::__construct();
        $config = include __DIR__ . "/../../config.php";
        $config["table"] = $this->tableName;
        $this->pageSize = $config["page_size"];
        $this->model = new BookingModel($config);
    }
    public function actionShow(): void
    {
        parent::actionShow();
        $this
            ->view
            ->setTemplate("Booking/show");
    }
    public function actionShowEdit(): void
    {
        parent::actionShowEdit();
        $this->view->setTemplate("Booking/add_edit");
    }
}