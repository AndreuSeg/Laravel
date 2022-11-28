<?php

namespace App\Repositories\Implementations;

use App\Repositories\Implementations\UsersRepository;

class HomeRepository
{

    protected $_usersRepository;

    public function __construct(UsersRepository $usersRepository)
    {
        $this->_usersRepository = $usersRepository;
    }

    public function getUsersRepository() {
        return $this->_usersRepository;
    }
    public function helloworld()
    {
        echo 'Hola Mundo';
    }
}

?>
