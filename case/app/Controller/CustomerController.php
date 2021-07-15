<?php


namespace App\Controller;
use App\Model\CustomerModel;

class CustomerController
{
    private $customerModel;
    public function __construct()
    {
        $this->customerModel = new CustomerModel();
    }

    public function signup($data){


        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            include_once 'signup.php';
        }else{
            $this->customerModel->create($_REQUEST);
        }
    }



    public function login()
    {

            $this->customerModel->login($_REQUEST);
    }
}