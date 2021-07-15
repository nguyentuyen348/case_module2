<?php

namespace App\Model;


class ProductModel
{
    private DBConnect $dbConnect;

    public function __construct()
    {
        $this->dbConnect = new DBConnect();
    }


    public function getAll(): array
    {
        try {
            $sql = "SELECT * FROM `products` ORDER BY `id` DESC";
            $stmt = $this->dbConnect->connect()->query($sql);
            $stmt->execute();
            return $this->convertAllToObj($stmt->fetchAll());
        } catch (\PDOException $exception) {
            die($exception->getMessage());
        }

    }


    public function getById($id): Product
    {
        try {
            $sql = "SELECT * FROM `products` WHERE `id`= $id";
            $stmt = $this->dbConnect->connect()->query($sql);
            $stmt->execute();
            return $this->convertToObject($stmt->fetch());
        } catch (\PDOException $exception) {
            die($exception->getMessage());
        }
    }

    //Tạo Author
    public function create($request)
    {
        $url = 'uploads/' . $_FILES['fileToUpload']['name'];
        try {
            $sql = "INSERT INTO `products`(`name`,`sex`,`size`,`category`,`brand`,`color`,`material`,`price`,`status`,`img`) VALUES (?,?,?,?,?,?,?,?,?,?)";
            $stmt = $this->dbConnect->connect()->prepare($sql);
            $stmt->bindParam(1, $request['name']);
            $stmt->bindParam(2, $request['sex']);
            $stmt->bindParam(3, $request['size']);
            $stmt->bindParam(4, $request['category']);
            $stmt->bindParam(5, $request['brand']);
            $stmt->bindParam(6, $request['color']);
            $stmt->bindParam(7, $request['material']);
            $stmt->bindParam(8, $request['price']);
            $stmt->bindParam(9, $request['status']);
            $stmt->bindParam(10, $url);
            $stmt->execute();
        } catch (\PDOException $exception) {
            echo $exception->getMessage();
        }

    }

    //Cập nhật thông tin
    public function update($request)
    {
        $product = $this->getById($_REQUEST['id']);
        if ($_FILES['fileToUpload']['name'] == '') {
            $url = $product->getImg();
        } else {
            $url = 'uploads/' . $_FILES['fileToUpload']['name'];
        }
        try {
            $sql = "UPDATE `products` SET `name`=?,`sex`=?,`size`=?,`category`=?,`brand`=?,`color`=?,`material`=?,`price`=?,`status`=?,`img`=? WHERE `id`=" . $request['id'];
            $stmt = $this->dbConnect->connect()->prepare($sql);
            $stmt->bindParam(1, $request['nameProduct']);
            $stmt->bindParam(2, $request['sex']);
            $stmt->bindParam(3, $request['size']);
            $stmt->bindParam(4, $request['category']);
            $stmt->bindParam(5, $request['brand']);
            $stmt->bindParam(6, $request['color']);
            $stmt->bindParam(7, $request['material']);
            $stmt->bindParam(8, $request['price']);
            $stmt->bindParam(9, $request['status']);
            $stmt->bindParam(10, $url);
            $stmt->execute();
        } catch (\PDOException $exception) {
            echo $exception->getMessage();
        }
    }

    //Xoá theo id
    public function delete($id)
    {
        $sql = "DELETE FROM `products` WHERE `id` = $id";
        $stmt = $this->dbConnect->connect()->query($sql);
        $stmt->execute();
    }
    public function search($search): array
    {
        try {
            $sql = "SELECT * FROM products WHERE name LIKE '%$search%' ";
            $stmt = $this->dbConnect->connect()->prepare($sql);
            $stmt->execute();
            return $this->convertAllToObj($stmt->fetchAll());

        } catch (\PDOException $exception) {
            die($exception->getMessage());
        }
    }

    public function convertToObject($data)
    {
        $product = new Product($data['name'], $data['sex'], $data['size'], $data['category'], $data['brand'], $data['color'], $data['material'], $data['price'], $data['status']);
        $product->setId($data['id']);
        if ($data['img'] == 'uploads/' || $data['img'] == null) {
            $product->setImg("uploads/default.jpg");
        } else {
            $product->setImg($data['img']);
        }
        return $product;
    }

    public function convertAllToObj($data): array
    {
        $products = [];
        foreach ($data as $item) {
            $products[] = $this->convertToObject($item);
        }
        return $products;
    }

}
