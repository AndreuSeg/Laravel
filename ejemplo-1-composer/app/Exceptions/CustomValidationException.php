<?php

namespace App\Exceptions;

use Exception;

class CustomValidationException extends Exception
{
    protected $_message;
    protected $_data;

    public function __construct($message, $data) {
        $this->_message = $message;
        $this->_data = $data;
    }

    public function getData() {
        return $this->_data;
    }
}
