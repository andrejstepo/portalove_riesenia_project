<?php

namespace pizzeria;

class DB
{
    private $host;
    private $dbname;
    private $username;
    private $password;
    private $connection;

    public function __construct($host, $dbname, $username, $password)
    {
        $this->host = $host;
        $this->dbname = $dbname;
        $this->username = $username;
        $this->password = $password;

        try {
            $this->connection = new \PDO('mysql:host='.$this->host.';dbname='.$this->dbname, $this->username, $this->password);
        } catch (\PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }


    public function insertEmail($name, $email, $subject, $message)
    {
        $dateTime = date('Y-m-d H:i:s', time());
        $sql = "INSERT INTO email(name, email, subject, message, created_at, updated_at) 
                VALUE ('".$name."', '".$email."', '".$subject."', '".$message."', '".$dateTime."', '".$dateTime."')";
        try {
            $this->connection->exec($sql);
            return true;
        } catch (\PDOException $e) {
            return false;
        }
    }

    public function insertPizza($sys_name, $display_name, $img, $content)
    {
        $dateTime = date('Y-m-d H:i:s', time());
        $sql = "INSERT INTO pizza_menu(sys_name, display_name, img, content, created_at, updated_at) 
                VALUE ('".$sys_name."', '".$display_name."', '".$img."', '".$content."', '".$dateTime."', '".$dateTime."')";
        try {
            $this->connection->exec($sql);
            return true;
        } catch (\PDOException $e) {
            return false;
        }
    }

    public function getAllEmails()
    {
        $emails = [];
        $sql = "SELECT * FROM email";

        $query = $this->connection->query($sql);

        while ($row = $query->fetch()) {
            $emails[] = [
                'id' => $row['id'],
                'name' => $row['name'],
                'email' => $row['email'],
                'subject' => $row['subject'],
                'message' => $row['message'],
                'created_at' => $row['created_at']
            ];
        }

        return $emails;
    }

    public function getAllPizzaMenu()
    {
        $content = [];
        $sql = "SELECT * FROM pizza_menu";

        $query = $this->connection->query($sql);

        while ($row = $query->fetch()) {
            $content[] = [
                'id' => $row['id'],
                'sys_name' => $row['sys_name'],
                'display_name' => $row['display_name'],
                'img' => $row['img'],
                'content' => $row['content'],
                'created_at' => $row['created_at']
            ];
        }

        return $content;
    }

    public function getAllMenu()
    {
        $menuItems = [];
        $sql = "SELECT * FROM menu";

        $query = $this->connection->query($sql);

        while ($row = $query->fetch()) {
            $menuItems[] = [
                'id' => $row['id'],
                'sys_name' => $row['sys_name'],
                'display_name' => $row['display_name'],
                'created_at' => $row['created_at']
            ];
        }

        return $menuItems;
    }

    public function deleteContact($id)
    {
        $sql = "DELETE FROM email WHERE id = ".$id;

        try {
            $this->connection->exec($sql);
            return true;
        } catch (\PDOException $e) {
            return false;
        }
    }

    public function deletePizza($id)
    {
        $sql = "DELETE FROM pizza_menu WHERE id = ".$id;

        try {
            $this->connection->exec($sql);
            return true;
        } catch (\PDOException $e) {
            return false;
        }
    }

    public function getEmailDetails($id)
    {
        $sql = "SELECT id, name, email, subject, message FROM email WHERE id = " . $id;
        $result = [];

        try {
            $query = $this->connection->query($sql);
            $result = $query->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
        } catch (\PDOException $e) {
            return $result;
        }

    }

    public function getContentDetails($id)
    {
        $sql = "SELECT id, display_name, content FROM content WHERE id = " . $id;
        $result = [];

        try {
            $query = $this->connection->query($sql);
            $result = $query->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
        } catch (\PDOException $e) {
            return $result;
        }
    }

    public function getMenuDetails($id)
    {
        $sql = "SELECT id, display_name FROM menu  WHERE id = " . $id;
        $result = [];

        try {
            $query = $this->connection->query($sql);
            $result = $query->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
        } catch (\PDOException $e) {
            return $result;
        }

    }

    public function getPizzaMenuDetails($id)
    {
        $sql = "SELECT id, sys_name, display_name, img, content FROM pizza_menu WHERE id = " . $id;
        $result = [];

        try {
            $query = $this->connection->query($sql);
            $result = $query->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
        } catch (\PDOException $e) {
            return $result;
        }

    }

    public function updateEmail($id, $from, $email, $subject, $message)
    {
        $dateTime = date('Y-m-d H:i:s', time());
        $sql = "UPDATE email 
                SET name = '".$from."', email = '".$email."', subject = '".$subject."', message = '".$message."', updated_at = '".$dateTime."' 
                WHERE id = ".$id;
        try {
            $this->connection->exec($sql);
            return true;
        } catch (\PDOException $e) {
            return false;
        }
    }

    public function updateMenu($id, $display_name)
    {
        $dateTime = date('Y-m-d H:i:s', time());
        $sql = "UPDATE menu
                SET display_name = '".$display_name."', updated_at = '".$dateTime."'  
                WHERE id = ".$id;
        try {
            $this->connection->exec($sql);
            return true;
        } catch (\PDOException $e) {
            return false;
        }
    }

    public function updatePizza($id, $sys_name, $display_name, $img, $content)
    {
        $dateTime = date('Y-m-d H:i:s', time());
        $sql = "UPDATE pizza_menu
                SET sys_name = '".$sys_name."', display_name = '".$display_name."', img = '".$img."', content = '".$content."', updated_at = '".$dateTime."'
                WHERE id = ".$id;
        try {
            $this->connection->exec($sql);
            return true;
        } catch (\PDOException $e) {
            return false;
        }
    }


    public function login($username, $password)
    {
        $hasPassword = sha1($password);
        $sql = "SELECT COUNT(id) AS is_admin FROM user WHERE username = '".$username."' AND password = '".$hasPassword."'";

        try {
            $query = $this->connection->query($sql);
            $result = $query->fetch(\PDO::FETCH_ASSOC);
            if(intval($result['is_admin']) === 1) {
                return true;
            } else {
                return false;
            }
        } catch (\PDOException $e) {
            return false;
        }
    }
}