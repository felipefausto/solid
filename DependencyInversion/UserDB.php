<?php

class UserDB {
    private $dbConnection;

    public function __construct(DBConnectionInterface $dbConnection)
    {
        $this->dbConnection = $dbConnection;
    }

    public function store(User $user)
    {
        // Store the user...
    }
}