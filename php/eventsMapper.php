<?php
require_once "databaseConfig.php";

class eventsMapper extends DatabasePDOConfiguration
{

    private $conn;
    private $query;

    public function __construct()
    {
        $this->conn = $this->getConnection();
    }
    public function getAllEvents()
    {
        $this->query = "select * from events";
        $statement = $this->conn->prepare($this->query);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function removeEvents($eventsId)
    {
        $this->query = "delete from events where id_events=:id";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":id", $eventsId);
        $statement->execute();
    }
    public function insertEvents($n, $d, $i, $a)
    {
        $this->query = "insert into events (name,description,image,added_By) values (:name,:description,:image,:added_By)";
        $statement = $this->conn->prepare($this->query);
        $name = $n;
        $decription = $d;
        $image = $i;
        $added_By = $a;
        $statement->bindParam(":name", $name);
        $statement->bindParam(":description", $description);
        $statement->bindParam(":image", $image);
        $statement->bindParam(":added_By", $added_By);
        $statement->execute();
    }
}
