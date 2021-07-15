<?php
namespace App\Model;

class Product
{
        private $id;
        private $name;
        private $sex;
        private $size;
        private $category;
        private $brand;
        private $color;
        private $material;
        private $price;
        private $status;
        private $img;


    public function __construct($name, $sex, $size, $category, $brand, $color, $material, $price, $status)
    {
        $this->name = $name;
        $this->sex = $sex;
        $this->size = $size;
        $this->category = $category;
        $this->brand = $brand;
        $this->color = $color;
        $this->material = $material;
        $this->price = $price;
        $this->status = $status;
    }


    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }


    public function getName()
    {
        return $this->name;
    }


    public function setName($name)
    {
        $this->name = $name;
    }


    public function getSex()
    {
        return $this->sex;
    }


    public function setSex($sex)
    {
        $this->sex = $sex;
    }


    public function getSize()
    {
        return $this->size;
    }


    public function setSize($size)
    {
        $this->size = $size;
    }


    public function getCategory()
    {
        return $this->category;
    }


    public function setCategory($category)
    {
        $this->category = $category;
    }


    public function getBrand()
    {
        return $this->brand;
    }


    public function setBrand($brand)
    {
        $this->brand = $brand;
    }


    public function getColor()
    {
        return $this->color;
    }


    public function setColor($color)
    {
        $this->color = $color;
    }


    public function getMaterial()
    {
        return $this->material;
    }


    public function setMaterial($material)
    {
        $this->material = $material;
    }


    public function getPrice()
    {
        return $this->price;
    }


    public function setPrice($price)
    {
        $this->price = $price;
    }


    public function getStatus()
    {
        return $this->status;
    }


    public function setStatus($status)
    {
        $this->status = $status;
    }


    public function getImg()
    {
        return $this->img;
    }


    public function setImg($img)
    {
        $this->img = $img;
    }


}
