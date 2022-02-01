<?php
namespace App\classes;

class User
{
    public $city = 'Dhaka';
    protected $country = 'Bangladesh';
    private $area = 'Karwanbazar';

    public function login()
    {
        echo 'In login';
    }
    protected function logout()
    {
        echo 'In logout';
    }
    private function profile()
    {
        echo 'In profile';
    }
}