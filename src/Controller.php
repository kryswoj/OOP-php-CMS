<?php

class Controller
{
    protected $entityId;
    protected $dbc;

    public function __construct()
    {
        $dbh = DatabaseConnection::getInstance();
        $this->dbc = $dbh->getConnection();
    }

    public function runAction($actionName) {
        if(method_exists($this, 'runBeforeAction')) {
            $result = $this->runBeforeAction();
            if (!$result) {
                return;
            }
        }

        if (method_exists($this, $actionName)) {
            $this->$actionName();
        } else {
            include 'view/status/404.php';
        }
    }

    public function setEntityId($entityId) {
        $this->entityId = $entityId;
    }
}