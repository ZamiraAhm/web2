<?php
require_once "databaseConfig.php";

class reservationsMapper extends DatabasePDOConfiguration
{
    private $conn;
    private $query;

    public function __construct()
    {
        $this->conn = $this->getConnection();
    }

    public function getAllReservations()
    {
        $this->query = "select * from reservations";
        $statement = $this->conn->prepare($this->query);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function insertMessage($n, $pn, $nop, $o, $d, $t)
    {
        $this->query = "insert into reservations (name,phone_number,number_of_people,occasion,date,time) values (:name,:phone_number,:number_of_people,:occasion,:date,:time)";

        $statement = $this->conn->prepare($this->query);
        $name = $n;
        $phone_number = $pn;
        $number_of_people = $nop;
        $occasion = $o;
        $date = $d;
        $time = $t;
        $statement->bindParam(":name", $name);
        $statement->bindParam(":phone_number", $phone_number);
        $statement->bindParam(":number_of_people", $number_of_people);
        $statement->bindParam(":occasion", $occasion);
        $statement->bindParam(":date", $date);
        $statement->bindParam(":time", $time);
        $statement->execute();
    }
    public function deleteMessage($id)
    {
        $this->query = "delete from reservations where reservations_id=:id";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":id", $id);
        $statement->execute();
    }
}
