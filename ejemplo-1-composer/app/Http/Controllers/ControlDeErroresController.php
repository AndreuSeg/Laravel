<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use App\Exceptions\CustomValidationException;

class ControlDeErroresController extends Controller
{

    protected $_isJson;

    public function index() {

        try {
            1 / 1;
            $this->_generateException();
        } catch (CustomValidationException $e) {
            $error = [
                'message' => $e->getMessage(),
                'data' => $e->getdata()
            ];
            return response()->json($error);
        }
    }

    private function _generateException() {
        throw new CustomValidationException('Excepcion Custom',
        ['name' => 'Andreu']);
    }
}
