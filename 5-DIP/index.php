<?php

interface DatabaseInterface
{

    public function save($data);

}

class MySql implements DatabaseInterface
{

    public function save($data)
    {
        // save $data
        return [
            'data' => $data,
            'driver' => 'mysql'
        ];
    }

}

class PostgreSql implements DatabaseInterface
{

    public function save($data)
    {
        // save $data
        return [
            'data' => $data,
            'driver' => 'postgresql'
        ];
    }

}

class UserModel
{

    /**
     * @var DatabaseInterface
     */
    private $database;

    public function __construct(DatabaseInterface $database)
    {
        $this->database = $database;
    }

    public function createUser($data)
    {
        return $this->$this->database->save();
    }

}

$data = [
    'name' => 'Narges',
    'email' => 'nars.afshar@gmail.com'
];

$user = new UserModel(new MySql());
var_dump($user->createUser($data));

$user2 = new UserModel(new PostgreSql());
var_dump($user2->createUser($data));
