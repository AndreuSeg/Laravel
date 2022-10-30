<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Symfony\Component\Console\Input\Input;

class IntroductionController extends Controller
{
    public function index(Request $request) {

        $year = $request->input('year');
        if ($year == null){
            $year = date('Y');
        }

        $format = $request->input('format');
        if ($format == null) {
            $format = 'html';
        }

        $maxChars = 30;
        $concepts = [
            [
                'concept' => 'Curso de laravel9',
                'price' => 20,
                'currency' => 'USD',
                'taxes' => 10,
                'discount' => 0
            ],
            [
                'concept' => 'Curso de laravel9 Avanzado Impartido por XXXXXX',
                'price' => 50,
                'currency' => 'USD',
                'taxes' => 10,
                'discount' => 0
            ],
            [
                'concept' => 'Licencia Sublime',
                'price' => 70,
                'currency' => 'USD',
                'taxes' => 21,
                'discount' => 5
            ],
            [
                'concept' => 'Laptop Macbook pro',
                'price' => 4300,
                'currency' => 'USD',
                'taxes' => 21,
                'discount' => 0
            ]
        ];

        $jsonConcepts = json_encode($concepts);

        switch ($format) {
            case 'base64':
                // En caso de que el formate sea bas64 te devolvera la pagina codificando los datos en base64
                return response(base64_encode($jsonConcepts));
                break;
            case 'json':
                // En caso de que el formato sea json te devolvera la pagina como tipo json
                return response()->json($concepts);
                break;
            default:
                return view('introduccion', [
                    'maxChars' => $maxChars,
                    'concepts' => $concepts,
                    'year' => $year,
                    'jsonConcepts' => $jsonConcepts
                ]);
                break;
        }
        // return response();
        // return redirect();
    }
}
