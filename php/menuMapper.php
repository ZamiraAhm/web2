<?php
require_once "databaseConfig.php";

class menuMapper extends DatabasePDOConfiguration
{

    private $conn;
    private $query;

    public function __construct()
    {
        $this->conn = $this->getConnection();
    }
    public function getAllMenus()
    {
        $this->query = "select * from menu";
        $statement = $this->conn->prepare($this->query);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getMenuByID($menu_id)
    {
        $this->query = "select * from menu where id_menu=:id";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":id", $product_id);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    public function insertProduct($n, $d, $p, $i, $a)
    {
        $this->query = "insert into produktet (name,details,price,image,added_By) values (:name,:details,:price,:image,:added_By)";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":name", $n);
        $statement->bindParam(":details", $d);
        $statement->bindParam(":price", $p,);
        $statement->bindParam(":image", $i, PDO::PARAM_LOB);
        $statement->bindParam(":added_By", $a,);
        $statement->execute();
        $result = null;
        try {
            $result = $statement->fetch(PDO::FETCH_ASSOC);
        }
        catch( PDOException $Exception ) {
            echo $Exception->getMessage();
        }
        
        return $result;
    }
    public function deleteProduct($productID)
    {
        $this->query = "delete from menu where id_menu=:id";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":id", $productID);
        $statement->execute();
    }
}
