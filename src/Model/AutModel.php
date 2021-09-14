<?php


namespace App\Model;


use W1020\Table as ORMTable;

class AutModel extends ORMTable
{
    /**
     * @param string $login
     * @param string $pass
     * @return array<array>
     * @throws \Exception
     */
    public function checkUser(string $login, string $pass): array
    {
        $sql = <<<SQL
SELECT
    `users`.`id`,
    `users`.`login`,
    `users`.`pass`,
    `users`.`name`,
    `user_groups`.`name` AS 'group_name',
    `user_groups`.`code`
FROM
    `users`,
    `user_groups`
WHERE
    `users`.`user_groups_id` = `user_groups`.`id`
    AND 
    `users`.`login`='$login' AND `users`.`pass`='$pass'
SQL;
        return $this->query($sql);
    }

    /**
     * @param string $login
     * @return bool
     * @throws \Exception
     */
    public function checkUserExists(string $login): bool
    {
        return $this->query("SELECT COUNT(*) AS 'C' FROM `$this->tableName` WHERE `login`='$login'")[0]['C'];
    }

    /**
     * @throws \Exception
     */
    public function addNewUser(string $login, string $pass, string $name): void
    {
        $guestId = $this->query("SELECT `id` FROM `user_groups` WHERE `code` = 'user'")[0]['id'];
        $this->runSQL("INSERT INTO `users`(`login`, `pass`, `name`, `user_groups_id`) " .
            "VALUES ('$login','$pass','$name','$guestId')");
    }
}