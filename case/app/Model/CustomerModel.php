<?php


namespace App\Model;


class CustomerModel
{
    private $dbConnect;

    public function __construct()
    {
        $this->dbConnect = new DBConnect();
    }

    public function create($request)
    {
        try {
            $sql = "INSERT INTO `customers` (`username`,`email`,`password`) VALUES (?,?,?)";
            $stmt = $this->dbConnect->connect()->prepare($sql);
            $stmt->bindParam(1,$request['username']);
            $stmt->bindParam(2,$request['email']);
            $stmt->bindParam(3,$request['password']);
            $stmt->execute();
        } catch (\PDOException $exception) {
            echo $exception->getMessage();
        }
    }

    public function login($request)

    {


        try {
            $sql = "select * from `customers` where `username`=? and `password`=?";
            $stmt = $this->dbConnect->connect()->prepare($sql);
            $stmt->bindParam(1, $request['username']);
            $stmt->bindParam(2, $request['password']);
            $stmt->execute();
            if ($stmt->rowCount()>=1 ) {
               $customer= $stmt->fetchAll(\PDO::FETCH_OBJ);

               if ($customer[0]->username=='admin'&& $customer[0]->password=='123'){
                   header('location: admin.php');
               }
               else {
                   header('location:index.php');
               }
            }


        } catch (\PDOException $exception) {
            echo $exception->getMessage();
        }
    }
}