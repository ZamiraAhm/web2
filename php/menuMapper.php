<?php
require_once "databaseConfig.php";

class MenuMapper extends DatabasePDOConfiguration
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
        $statement->bindParam(":id", $menu_id);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    
    public function insertMenu($name, $details, $price, $image, $added_By)
    {
        $this->query = "insert into menu (name,details,price,image,added_By) values (:name,:details,:price,:image,:added_By)";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":name", $name);
        $statement->bindParam(":details", $details);
        $statement->bindParam(":price", $price);
        $statement->bindParam(":image", $image, PDO::PARAM_LOB);
        $statement->bindParam(":added_By", $added_By);
        $statement->execute();
        return $this->conn->lastInsertId();
    }
    
    public function deleteMenu($menu_id)
    {
        $this->query = "delete from menu where id_menu=:id";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":id", $menu_id);
        $statement->execute();
    }
}
