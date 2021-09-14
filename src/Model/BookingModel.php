<?php


namespace App\Model;

use W1020\Table as ORMTable;

class BookingModel extends ORMTable
{
    /**
     * @param int $page
     * @return array<array>
     * @throws \Exception
     */
    public function getPage(int $page = 1): array
    {
        $sql = <<<SQL
SELECT
    `booking`.`id`,
    `booking`.`start_date`,
    `booking`.`end_date`,
    `booking`.`name`,
    `booking`.`phone`,
     CONCAT(`car`.`model`, " (", `car`.`type`, ")")
FROM
    `booking`,
    `car`
WHERE
    `booking`.`car_id` = `car`.`id`
SQL;

        return $this->query(
            "$sql LIMIT " . (($page - 1) * $this->pageSize) . ",$this->pageSize;"
        );
    }

    /**
     * @return array <int|string, array>
     * @throws \Exception
     */
}