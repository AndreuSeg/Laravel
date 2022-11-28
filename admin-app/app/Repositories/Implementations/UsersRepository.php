<?php

namespace App\Repositories\Implementations;

use Illuminate\Database\Eloquent\Model;

class UsersRepository
{

/*     protected $_model;

    public function __construct(User $model) {
        $this->_model = $_model;
    } */

    public function helloworld()
    {
        echo 'Hola Mundo des de users';
    }
}
