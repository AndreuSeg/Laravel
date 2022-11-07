<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use Session;
use App\Exceptions\CustomValidationException;

class ControlDeErroresController extends Controller
{

    protected $_isJson;

    public function index() {

        Session::get('myvar'); // Obtener variable sesion
        Session::post('myvar', 1); // Guardar varaiable sesion
        Session::forget('myvar'); //

        Session::hast('myvar'); // Sirve para comprobar que tenemos una variable en nuestra sesion
        Session::flash(); // Es el equivalente a Session::put() cuando se reinicie la pagina se resetea la variable

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
