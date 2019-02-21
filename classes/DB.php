<?php

class DB
{
    protected $dbh;

    public function __construct(string $configPath)
    {
        $config = require $configPath;

        $dbHost = 'host=' . $config['dbHost'];
        $dbName = 'dbname=' . $config['dbName'];
        $dbUserName = $config['dbUserName'];
        $dbPassword = $config['dbPassword'];

        $dsn1 = implode(':', [$config['dbType'], $dbHost, $config['dbPort']]);
        $dsn = implode(';', [$dsn1, $dbName]);

        $this->dbh = new PDO($dsn, $dbUserName, $dbPassword);
    }

    public function execute(string $sql):bool
    {
        $sth = $this->dbh->prepare($sql);

        return $sth->execute();
    }


    /**
     * @param string $sql
     * @param array $data
     * @return array|bool
     */
    public function query(string $sql, array $data)
    {
        $sth = $this->dbh->prepare($sql);

        $result = $sth->execute($data);

        if ($result) {
            return $sth->fetchAll();
        }else{
            return false;
        }
    }
}