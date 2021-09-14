<?php

namespace App\Controller;

use App\Model\CarModel;
use W1020\Table as ORMTable;

class Newbooking extends Booking
{
    public function actionShow(): void
    {
        parent::actionShow();
        $this->view->setTemplate("Newbooking/show");
    }

}