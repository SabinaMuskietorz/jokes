<?php
namespace Ijdb\controllers;
class UserController {
    private $usersTable;
    public function __construct($usersTable) {
        $this->usersTable = $usersTable;
    }
}
?>