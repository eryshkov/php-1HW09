<?php
namespace Model;
class DB
{
    protected $dbh;

    public function __construct()
    {
        $config = require __DIR__ . '/../../config.php';

        $dbUserName = $config['dbUserName'];
        $dbPassword = $config['dbPassword'];

        $dsn = $config['dbDriver'] . ':host=' . $config['dbHost'] . ';port=' . $config['dbPort'] . ';dbname=' . $config['dbName'];

        $this->dbh = new \PDO($dsn, $dbUserName, $dbPassword);
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